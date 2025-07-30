<?php

namespace App\Livewire\Tools;

use Http;
use Livewire\Component;

class InboxStatus extends Component
{
    public string $email = 'name@example.com';

    public array $result = [];

    public string $error = '';

    public function render()
    {
        return view('livewire.tools.inbox-status');
    }

    public function sendRequest()
    {

        $this->reset('result', 'error');
        if (! filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Invalid email format.';

            return;
        }

        try {

            $response = Http::get(env('API_URL').'/validate/inbox-status', [
                'email' => $this->email,
            ]);

            if ($response->successful()) {
                $this->result = $response->json();

            } else {

                $this->result = [];
                $this->error = 'Invalid email format.';

            }
        } catch (\Exception $e) {
            $this->error = 'Request failed: '.$e->getMessage();

        }
    }
}
