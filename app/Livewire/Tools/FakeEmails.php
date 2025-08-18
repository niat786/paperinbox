<?php

namespace App\Livewire\Tools;

use Http;
use Livewire\Component;

class FakeEmails extends Component
{
    public $bulkCount = 10;

    public $singleEmail = null;

    public $bulkEmails = [];

    public function render()
    {
        return view('livewire.tools.fake-emails');
    }

    public function generateSingle()
    {
        $response = Http::get(env('API_URL').'/generate/fake-email');
        $this->singleEmail = $response->json();
    }

    public function generateBulk()
    {
        if ($this->bulkCount >= 100) {
            $this->bulkCount = 100;
        }
        $response = Http::get(env('API_URL').'/generate/fake-email', ['count' => $this->bulkCount]);
        $this->bulkEmails = $response->json();
    }

    public function triggerDownload()
    {
        session()->put('bulkEmailsForDownload', $this->bulkEmails);
        $this->dispatch('download-csv');
    }
}
