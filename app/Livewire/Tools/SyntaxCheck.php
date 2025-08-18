<?php

namespace App\Livewire\Tools;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileObject;

class SyntaxCheck extends Component
{
    use WithFileUploads;

    /** Single email or pasted list (comma/newline/semicolon/tab/pipe separated) */
    public string $emailInput = '';

    /** @var UploadedFile|null */
    public $emailFile = null;

    /** Results visible to the view */
    public array $report = [
        'summary' => [
            'total' => 0,
            'unique' => 0,
            'valid' => 0,
            'invalid' => 0,
            'incomplete' => 0,
            'duplicates' => 0,
            'blanks' => 0,
        ],
        'items' => [], // each: ['email' => 'a@b.com', 'status' => 'valid|invalid|incomplete|duplicate|blank', 'reason' => '...']
    ];

    protected function rules(): array
    {
        return [
            'emailInput' => ['nullable', 'string'],
            'emailFile' => ['nullable', 'file', 'max:5120', 'mimes:txt,csv'],
        ];
    }

    /**
     * Main action: collect emails from the text input and/or file,
     * validate syntax, and build a categorized report.
     */
    public function sendRequest(): void
    {
        $this->validate();

        // 1) Collect emails from input + file (strict tokens, no substring extraction)
        $fromText = $this->tokenizeList($this->emailInput);
        $fromFile = $this->emailFile instanceof UploadedFile ? $this->extractFromFile($this->emailFile) : [];

        // Merge & keep original order, we’ll detect duplicates later
        $raw = array_values(array_filter(array_merge($fromText, $fromFile), fn ($v) => $v !== null));

        // 2) Build report
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

            if ($normalized === '') {
                $items[] = ['email' => $email, 'status' => 'blank', 'reason' => 'Empty line or whitespace'];
                $summary['blanks']++;

                continue;
            }

            // Duplicate check (case-insensitive)
            $dupKey = Str::lower($normalized);
            if (isset($seen[$dupKey])) {
                $items[] = ['email' => $normalized, 'status' => 'duplicate', 'reason' => 'Duplicate of a previously seen email'];
                $summary['duplicates']++;

                continue;
            }
            $seen[$dupKey] = true;
            $summary['unique']++;

            // Quick structural checks
            $atCount = substr_count($normalized, '@');
            if ($atCount === 0) {
                $items[] = ['email' => $normalized, 'status' => 'incomplete', 'reason' => 'Missing "@" symbol'];
                $summary['incomplete']++;

                continue;
            }
            if ($atCount > 1) {
                $items[] = ['email' => $normalized, 'status' => 'invalid', 'reason' => 'Contains multiple "@" symbols'];
                $summary['invalid']++;

                continue;
            }

            [$local, $domain] = array_pad(explode('@', $normalized, 2), 2, '');
            if ($local === '' || $domain === '') {
                $items[] = ['email' => $normalized, 'status' => 'incomplete', 'reason' => 'Missing local or domain part'];
                $summary['incomplete']++;

                continue;
            }

            if (preg_match('/\s/', $normalized)) {
                $items[] = ['email' => $normalized, 'status' => 'invalid', 'reason' => 'Contains whitespace'];
                $summary['invalid']++;

                continue;
            }

            // 3) Strict "common providers" check (blocks $, ^, &, *, etc.)
            if ($reason = $this->commonStrictEmailReason($local, $domain)) {
                $items[] = ['email' => $normalized, 'status' => 'invalid', 'reason' => $reason];
                $summary['invalid']++;

                continue;
            }

            // 4) RFC validator as secondary check (optional but nice)
            $v = Validator::make(['email' => $normalized], [
                'email' => 'required|email:rfc,strict',
            ]);

            if ($v->fails()) {
                $items[] = [
                    'email' => $normalized,
                    'status' => 'invalid',
                    'reason' => 'Fails RFC syntax: '.implode('; ', $v->errors()->all()),
                ];
                $summary['invalid']++;
            } else {
                $items[] = ['email' => $normalized, 'status' => 'valid', 'reason' => ''];
                $summary['valid']++;
            }
        }

        $this->report = ['summary' => $summary, 'items' => $items];
    }

    /** STRICT tokenization for lists: split on newline, comma, semicolon, tab, or pipe — NOT spaces */
    protected function tokenizeList(?string $text): array
    {
        if (! $text) {
            return [];
        }
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

            // Trim common quotes/punctuation
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

        // Remove surrounding quotes on the whole address
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

    /**
     * "Common providers" strict rule:
     * - Overall length <= 254
     * - Local: 1..64, allowed chars [A-Za-z0-9._%+-], no leading/trailing '.', no consecutive '..'
     * - Domain: at least one dot, labels [A-Za-z0-9-], no leading/trailing '-', no consecutive '..',
     *           label length 1..63, TLD letters only 2..63.
     * Returns null if OK, or a human-readable reason string if invalid.
     */
    protected function commonStrictEmailReason(string $local, string $domain): ?string
    {
        $email = $local.'@'.$domain;

        // Length limits
        if (strlen($email) > 254) {
            return 'Email exceeds 254 characters';
        }
        if (strlen($local) === 0 || strlen($local) > 64) {
            return 'Local part length is invalid';
        }

        // Local part rules
        if ($local[0] === '.' || substr($local, -1) === '.') {
            return 'Local part starts or ends with a dot';
        }
        if (str_contains($local, '..')) {
            return 'Consecutive dots in local part';
        }

        // Allowed local chars: letters, digits, . _ % + -
        if (! preg_match('/^[A-Za-z0-9._%+\-]+$/', $local)) {
            return 'Invalid characters in local part (allowed: letters, digits, . _ % + -)';
        }

        // Domain normalization (IDN -> ASCII if possible)
        $asciiDomain = $domain;
        if (function_exists('idn_to_ascii')) {
            $tmp = @idn_to_ascii($domain, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46);
            if ($tmp !== false && $tmp !== null) {
                $asciiDomain = $tmp;
            }
        }

        // Basic domain checks
        if ($asciiDomain[0] === '.' || substr($asciiDomain, -1) === '.') {
            return 'Domain starts or ends with a dot';
        }
        if (str_contains($asciiDomain, '..')) {
            return 'Consecutive dots in domain';
        }
        if (! str_contains($asciiDomain, '.')) {
            return 'Domain must contain a dot';
        }

        // Labels
        $labels = explode('.', $asciiDomain);
        foreach ($labels as $label) {
            $len = strlen($label);
            if ($len < 1 || $len > 63) {
                return 'A domain label length is invalid';
            }
            if (! preg_match('/^[A-Za-z0-9-]+$/', $label)) {
                return 'Invalid characters in domain label';
            }
            if ($label[0] === '-' || substr($label, -1) === '-') {
                return 'A domain label starts or ends with a hyphen';
            }
        }

        // TLD must be letters only (common-provider rule)
        $tld = end($labels);
        if (! preg_match('/^[A-Za-z]{2,63}$/', $tld)) {
            return 'Top-level domain must be letters only';
        }

        return null; // OK
        // (Optional) You can also enforce full domain length <= 253 here if you need.
    }

    public function render()
    {
        return view('livewire.tools.syntax-check');
    }
}
