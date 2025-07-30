<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Generator extends Component
{
    public $mode = 0;

    public $bulkCount = 5;

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
        if ($this->bulkCount >= 11) {
            $this->bulkCount = 10;
            $this->bulkMaxMessage = 'Demo limit: Only the first 10 generated emails are displayed below.';
        }
        for ($i = 0; $i < $this->bulkCount; $i++) {
            $emails[] = $this->fetchEmail();
        }
        $this->generatedEmails = $emails;
        $this->loading = false;

    }

    private function fetchEmail()
    {

        // You can replace this with your actual API call
        $url = env('API_URL').'/generate/fake-email';
        $response = Http::get($url);

        if ($response->successful()) {
            $user = $response->json();

            $email = $user[0]['email'];
            $jobTitle = $user[0]['job_title'];

            return [
                'email' => $email,
                'title' => $jobTitle,
            ];
        }

        return ['email' => 'unknown@example.com', 'title' => 'Unknown'];
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
