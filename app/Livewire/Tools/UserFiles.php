<?php

namespace App\Livewire\Tools;

use Livewire\Component;

class UserFiles extends Component
{
    public $viewMode = 'grid'; // or 'list'

    public $files = [
        ['name' => 'Document.pdf', 'date' => '2025-07-23', 'url' => '/downloads/document.pdf'],
        ['name' => 'Invoice.png', 'date' => '2025-07-21', 'url' => '/downloads/invoice.png'],
        ['name' => 'Notes.txt', 'date' => '2025-07-20', 'url' => '/downloads/notes.txt'],
    ];

    public function setViewMode($mode)
    {
        $this->viewMode = $mode;
    }

    public function render()
    {
        return view('livewire.tools.user-files');
    }
}
