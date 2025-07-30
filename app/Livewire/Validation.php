<?php

namespace App\Livewire;

use Http;
use Livewire\Component;

class Validation extends Component
{
    public string $email = 'name@example.com';

    public array $result = [];

    public string $error = '';

    public bool $loading = false;

    public function render()
    {
        return view('livewire.validation');
    }

    public function sendRequest()
    {
        $this->loading = true;
        $this->reset('result', 'error');

        // if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        //     $this->error = 'Invalid email format.';

        //     return;
        // }

        try {

            $response = Http::get(env('API_URL').'/validate/inbox-status', [
                'email' => $this->email,
            ]);

            if ($response->successful()) {
                $this->result = $response->json();

            } else {

                $this->result = [];

            }
        } catch (\Exception $e) {
            $this->error = 'Request failed: '.$e->getMessage();

        }
        $this->loading = false;
    }

    public function redirectToLogin()
    {
        return redirect()->route('login');
    }
}
