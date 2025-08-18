<?php

namespace App\Livewire\Tools;

use Livewire\Component;

class TempMail extends Component
{
    public function render()
    {
        return view('livewire.tools.temp-mail');
    }

    public ?TempMailbox $mailbox = null;

    public $emails = [];

    public int $ttlMinutes = 15;

    protected $listeners = ['refreshEmails' => '$refresh'];

    public function mount(?int $mailboxId = null)
    {
        if ($mailboxId) {
            $this->mailbox = TempMailbox::with('domain')->find($mailboxId);
        }
    }

    public function generate()
    {
        $domain = TempDomain::where('enabled', true)->inRandomOrder()->firstOrFail();
        $local = Str::lower(Str::random(8));
        $address = "{$local}@{$domain->domain}";

        $this->mailbox = TempMailbox::create([
            'local_part' => $local,
            'temp_domain_id' => $domain->id,
            'full_address' => $address,
            'expires_at' => now()->addMinutes($this->ttlMinutes),
            'user_id' => auth()->id(),
        ]);
    }

    public function extendTtl(int $more = 15)
    {
        if (! $this->mailbox) {
            return;
        }
        $this->mailbox->update([
            'expires_at' => Carbon::parse($this->mailbox->expires_at)->addMinutes($more),
        ]);
    }

    public function getEmailsProperty()
    {
        return $this->mailbox
            ? $this->mailbox->emails()->withCount('attachments')->get()
            : collect();
    }

    public function deleteMailbox()
    {
        optional($this->mailbox)->delete();
        $this->mailbox = null;
    }
}
