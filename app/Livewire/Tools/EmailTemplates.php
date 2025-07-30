<?php

namespace App\Livewire\Tools;

use Livewire\Component;

class EmailTemplates extends Component
{
    public array $templates = [];

    public function mount()
    {
        $this->templates = [
            [
                'name' => 'Modern Newsletter',
                'description' => 'Clean layout perfect for product updates.',
                'thumbnail' => asset('images/test/test-email-img-1.jpg'),
                'preview_url' => '/templates/newsletter/preview',
                'download_url' => '/templates/newsletter/download',
            ],
            [
                'name' => 'Next email template',
                'description' => 'Clean layout perfect for product updates.',
                'thumbnail' => asset('images/test/test-email-img-2.jpg'),
                'preview_url' => '/templates/newsletter/preview',
                'download_url' => '/templates/newsletter/download',
            ],
            [
                'name' => 'Modern Newsletter',
                'description' => 'Clean layout perfect for product updates.',
                'thumbnail' => asset('images/test/test-email-img-1.jpg'),
                'preview_url' => '/templates/newsletter/preview',
                'download_url' => '/templates/newsletter/download',
            ],
            [
                'name' => 'Next email template',
                'description' => 'Clean layout perfect for product updates.',
                'thumbnail' => asset('images/test/test-email-img-2.jpg'),
                'preview_url' => '/templates/newsletter/preview',
                'download_url' => '/templates/newsletter/download',
            ],
            [
                'name' => 'Modern Newsletter',
                'description' => 'Clean layout perfect for product updates.',
                'thumbnail' => asset('images/test/test-email-img-1.jpg'),
                'preview_url' => '/templates/newsletter/preview',
                'download_url' => '/templates/newsletter/download',
            ],
            [
                'name' => 'Next email template',
                'description' => 'Clean layout perfect for product updates.',
                'thumbnail' => asset('images/test/test-email-img-2.jpg'),
                'preview_url' => '/templates/newsletter/preview',
                'download_url' => '/templates/newsletter/download',
            ],
            // more templates...
        ];
    }

    public function render()
    {
        return view('livewire.tools.email-templates', [
            'templates' => $this->templates,
        ]);
    }
}
