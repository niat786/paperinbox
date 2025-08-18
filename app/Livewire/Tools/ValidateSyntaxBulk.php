<?php

namespace App\Livewire\Tools;

use App\Email\Validation\LocalPartPolicyValidation;
use Egulias\EmailValidator\EmailValidator as EguliasEmailValidator;
use Egulias\EmailValidator\Validation\NoRFCWarningsValidation;
use Egulias\EmailValidator\Validation\RFCValidation;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
// Egulias v4
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileObject;
// use Egulias\EmailValidator\Validation\DNSCheckValidation; // optional

// Custom policy (provider-style)
use Symfony\Component\HttpFoundation\StreamedResponse;

class ValidateSyntaxBulk extends Component
{
    use WithFileUploads;

    /** @var UploadedFile|null */
    public $emailFile = null;

    /** Heavier checks */
    public bool $useDns = true;

    /** Policy toggle: enforce Gmail-like local-part */
    public bool $useLocalPolicy = true;

    /** Results for the view */
    public array $report = [
        'summary' => [
            'total' => 0,
            'unique' => 0,
            'valid' => 0,
            'invalid' => 0,
            'incomplete' => 0, // retained for UI compatibility
            'duplicates' => 0,
            'blanks' => 0,
        ],
        'items' => [],
    ];

    protected function rules(): array
    {
        return [
            'emailFile' => ['required', 'file', 'max:5120', 'mimes:txt,csv'],
        ];
    }

    protected function messages(): array
    {
        return [
            'emailFile.required' => 'Please upload a CSV or TXT file.',
            'emailFile.mimes' => 'Only .csv or .txt files are allowed.',
            'emailFile.max' => 'File is too large (max 5 MB).',
        ];
    }

    /** Auto-validate & process when file changes. */
    public function updatedEmailFile(): void
    {
        $this->resetReport();
        $this->validateOnly('emailFile');
        $this->checkFile();
    }

    /** Manually trigger processing (e.g., on a button click). */
    public function checkFile(): void
    {
        if (! ($this->emailFile instanceof UploadedFile)) {
            $this->resetReport();

            return;
        }

        $emails = $this->extractFromFile($this->emailFile);
        $this->report = $this->buildReport($emails);
    }

    /** Stream download: valid emails as .txt */
    public function downloadValidTxt(): StreamedResponse
    {
        $emails = $this->pluckEmailsByStatus(['valid']);
        $filename = 'valid-emails-'.now()->format('Ymd-His').'.txt';

        return response()->streamDownload(function () use ($emails) {
            echo implode(PHP_EOL, $emails).PHP_EOL;
        }, $filename, [
            'Content-Type' => 'text/plain; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ]);
    }

    /** Stream download: invalid/duplicate/blank as .csv */
    public function downloadInvalidCsv(): StreamedResponse
    {
        [$rows, $filename] = $this->buildInvalidRowsCsv();

        return response()->streamDownload(function () use ($rows) {
            $out = fopen('php://output', 'w');
            fputcsv($out, ['email', 'status', 'reason']); // header
            foreach ($rows as $r) {
                fputcsv($out, $r);
            }
            fclose($out);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ]);
    }

    /** Build categorized report from a list of raw tokens using Egulias v4 (+ optional policy). */
    protected function buildReport(array $raw): array
    {
        $raw = array_values(array_filter($raw, fn ($v) => $v !== null));

        $seen = [];
        $items = [];
        $summary = [
            'total' => count($raw),
            'unique' => 0,
            'valid' => 0,
            'invalid' => 0,
            'incomplete' => 0,
            'duplicates' => 0,
            'blanks' => 0,
        ];

        foreach ($raw as $email) {
            $normalized = $this->normalizeEmail($email);

            // Blank
            if ($normalized === '') {
                $items[] = ['email' => $email, 'status' => 'blank', 'reason' => 'Empty line or whitespace'];
                $summary['blanks']++;

                continue;
            }

            // Duplicates (case-insensitive)
            $dupKey = Str::lower($normalized);
            if (isset($seen[$dupKey])) {
                $items[] = ['email' => $normalized, 'status' => 'duplicate', 'reason' => 'Duplicate of a previously seen email'];
                $summary['duplicates']++;

                continue;
            }
            $seen[$dupKey] = true;
            $summary['unique']++;

            // IDN → ASCII for domain (helps DNS)
            $asciiEmail = $normalized;
            if (function_exists('idn_to_ascii') && str_contains($normalized, '@')) {
                [$loc, $dom] = explode('@', $normalized, 2);
                $asciiDom = @idn_to_ascii($dom, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46);
                if ($asciiDom) {
                    $asciiEmail = $loc.'@'.$asciiDom;
                }
            }

            // Validate sequentially and stop at first failure (single, specific reason)
            [$ok, $reason] = $this->validateSingleReason($asciiEmail);

            if ($ok) {
                $items[] = ['email' => $normalized, 'status' => 'valid', 'reason' => ''];
                $summary['valid']++;
            } else {
                $items[] = ['email' => $normalized, 'status' => 'invalid', 'reason' => $reason ?: 'Invalid email'];
                $summary['invalid']++;
            }
        }

        return ['summary' => $summary, 'items' => $items];
    }

    /**
     * Run Egulias validations one-by-one and return the FIRST failure reason only.
     * Order: Local policy (optional) → RFC → NoRFCWarnings → DNS (optional)
     */
    protected function validateSingleReason(string $email): array
    {
        $validator = new EguliasEmailValidator;

        $chain = [];
        if ($this->useLocalPolicy) {
            $chain[] = new LocalPartPolicyValidation;
        }
        $chain[] = new RFCValidation;
        $chain[] = new NoRFCWarningsValidation;

        // if ($this->useDns && class_exists(\Egulias\EmailValidator\Validation\DNSCheckValidation::class)) {
        //     $chain[] = new \Egulias\EmailValidator\Validation\DNSCheckValidation();
        // }

        foreach ($chain as $validation) {
            if (! $validator->isValid($email, $validation)) {
                // Prefer Egulias error description if available
                $reason = 'Invalid email';
                $err = method_exists($validator, 'getError') ? $validator->getError() : null;
                if ($err && method_exists($err, 'description')) {
                    $reason = $err->description();
                } elseif (method_exists($validation, 'getWarnings')) {
                    // Our LocalPartPolicyValidation stores a single, specific warning
                    $warnings = $validation->getWarnings();
                    if (! empty($warnings)) {
                        $reason = (string) $warnings[0]; // first and only reason
                    }
                }

                return [false, $reason];
            }
        }

        return [true, ''];
    }

    /** Strict tokenization (no substring extraction). */
    protected function tokenizeList(?string $text): array
    {
        if (! $text) {
            return [];
        }
        // Split on newline, comma, semicolon, tab, or pipe — NOT spaces
        $parts = preg_split('/[\r\n,;|\t]+/u', $text, -1, PREG_SPLIT_NO_EMPTY) ?: [];

        $tokens = [];
        foreach ($parts as $p) {
            $p = trim($p);
            if ($p === '') {
                $tokens[] = '';

                continue;
            }

            // Unwrap <...> if whole token is enclosed
            if (preg_match('/^<([^>]+)>$/u', $p, $m)) {
                $p = trim($m[1]);
            }

            // Strip mailto:
            $p = preg_replace('/^mailto:/i', '', $p);

            // Trim quotes/punctuation
            $p = trim($p, " \t\n\r\0\x0B\"'.,");
            $tokens[] = $p;
        }

        return $tokens;
    }

    /** Stream-safe extract from CSV/TXT. */
    protected function extractFromFile(UploadedFile $file): array
    {
        $path = $file->getRealPath();
        if (! $path) {
            return [];
        }

        $ext = Str::lower($file->getClientOriginalExtension());
        $emails = [];

        // Handle BOM for UTF-8 text files
        $stripBom = static fn (string $line) => ltrim($line, "\xEF\xBB\xBF");

        if ($ext === 'csv') {
            $csv = new SplFileObject($path, 'r');
            $csv->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);

            foreach ($csv as $row) {
                if (! is_array($row)) {
                    continue;
                }
                foreach ($row as $cell) {
                    if ($cell === null) {
                        continue;
                    }
                    foreach ($this->tokenizeList((string) $cell) as $t) {
                        $emails[] = $t;
                    }
                }
            }
        } else { // .txt
            $fh = new SplFileObject($path, 'r');
            while (! $fh->eof()) {
                $line = $fh->fgets();
                if ($line === false) {
                    break;
                }
                $line = $stripBom($line);
                foreach ($this->tokenizeList($line) as $t) {
                    $emails[] = $t;
                }
            }
        }

        return $emails;
    }

    /** Normalize email for validation & comparison. */
    protected function normalizeEmail(string $email): string
    {
        $email = trim($this->stripAngles($email));

        // Remove surrounding quotes on the whole token (keeps quoted local part if inside)
        if ((Str::startsWith($email, '"') && Str::endsWith($email, '"')) ||
            (Str::startsWith($email, "'") && Str::endsWith($email, "'"))) {
            $email = substr($email, 1, -1);
        }

        // Lowercase domain only
        if (str_contains($email, '@')) {
            [$local, $domain] = explode('@', $email, 2);
            $email = $local.'@'.Str::lower($domain);
        }

        return $email;
    }

    /** Remove surrounding angle brackets like `<john@example.com>`. */
    protected function stripAngles(string $value): string
    {
        $v = trim($value);
        if (Str::startsWith($v, '<') && Str::endsWith($v, '>')) {
            return trim(substr($v, 1, -1));
        }

        return $v;
    }

    protected function resetReport(): void
    {
        $this->report = [
            'summary' => [
                'total' => 0,
                'unique' => 0,
                'valid' => 0,
                'invalid' => 0,
                'incomplete' => 0,
                'duplicates' => 0,
                'blanks' => 0,
            ],
            'items' => [],
        ];
    }

    /** Pull emails with given statuses, preserving order & uniqueness. */
    protected function pluckEmailsByStatus(array $statuses): array
    {
        if (empty($this->report['items'])) {
            return [];
        }
        $set = [];
        foreach ($this->report['items'] as $item) {
            if (in_array($item['status'], $statuses, true) && ! empty($item['email'])) {
                $set[] = $item['email'];
            }
        }

        return array_values(array_unique($set));
    }

    /** Build rows for invalid CSV + filename. */
    protected function buildInvalidRowsCsv(): array
    {
        $rows = [];
        if (! empty($this->report['items'])) {
            foreach ($this->report['items'] as $item) {
                if (in_array($item['status'], ['invalid', 'duplicate', 'blank'], true)) {
                    $rows[] = [
                        $item['email'] ?? '',
                        $item['status'],
                        $item['reason'] ?? '',
                    ];
                }
            }
        }
        $filename = 'invalid-emails-'.now()->format('Ymd-His').'.csv';

        return [$rows, $filename];
    }

    public function render()
    {
        return view('livewire.tools.validate-syntax-bulk');
    }
}
