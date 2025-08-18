<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Generator extends Component
{
    public $mode = 0;

    public $bulkCount = 100;

    public $generatedEmails = [];

    public bool $loading = false;

    public string $bulkMaxMessage = '';

    public function updatedMode($value)
    {
        $this->reset('generatedEmails');
    }

    public function generateSingleEmail()
    {
        $this->loading = true;
        $this->generatedEmails = [$this->fetchEmail()];
        $this->loading = false;
    }

    public function generateBulkEmails()
    {

        $this->loading = true;
        $emails = [];
        $this->reset('bulkMaxMessage');
        if ($this->bulkCount >= 100) {
            $this->bulkCount = 100;
            $this->bulkMaxMessage = 'Demo limit: Only the first 100 generated emails are displayed below.';
        }
        for ($i = 0; $i < $this->bulkCount; $i++) {
            $emails[] = $this->fetchEmail();
        }
        $this->generatedEmails = $emails;
        $this->loading = false;

    }

    private function fetchEmail(): array
    {
        $url = rtrim(env('APP_URL', config('app.url')), '/').'/api/fake-email';
        $response = Http::timeout(5)->get($url);

        if ($response->successful()) {
            $data = $response->json();

            $email = $data['email'] ?? 'unknown@example.com';
            $jobTitle = $data['job_title'] ?? 'Unknown';

            return [
                'email' => $email,
                'title' => $jobTitle,
            ];
        }

        // optional: log failure for debugging
        \Log::warning('Failed to fetch fake email', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        return [
            'email' => 'unknown@example.com',
            'title' => 'Unknown',
        ];
    }

    public function downloadCsv(): StreamedResponse
    {
        $emails = $this->generatedEmails;

        if (empty($emails)) {
            session()->flash('error', 'No emails to download.');

            return redirect()->back();
        }

        return response()->streamDownload(function () use ($emails) {
            $handle = fopen('php://output', 'w');
            // CSV headers
            fputcsv($handle, ['Email', 'Job Title']);
            // CSV rows
            foreach ($emails as $entry) {
                fputcsv($handle, [$entry['email'], $entry['title']]);
            }
            fclose($handle);
        }, 'generated-emails-paperinbox-com.csv');
    }

    public function render()
    {
        return view('livewire.generator');
    }
}
