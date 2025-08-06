<?php

namespace App\Livewire\EmailTemplates;

use Livewire\Component;

class OrderConfirmation extends Component
{
    public function render()
    {
        return view('livewire.email-templates.order-confirmation');
    }
}
