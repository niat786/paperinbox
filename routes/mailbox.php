<?php
// routes/mailbox.php (or in a service provider)
use BeyondCode\Mailbox\Facades\Mailbox;
use BeyondCode\Mailbox\InboundEmail;
use App\Models\{TempMailbox, TempEmail, TempAttachment};
use Illuminate\Support\Facades\Storage;

Mailbox::catchAll(function (InboundEmail $email) {
    // Determine which temp mailbox this email belongs to
    $toAddresses = collect($email->to())->pluck('address')->map('strtolower');
    $mailbox = TempMailbox::whereIn('full_address', $toAddresses)->first();

    if (!$mailbox) {
        return; // drop unknown / expired addresses
    }

    $saved = TempEmail::create([
        'temp_mailbox_id' => $mailbox->id,
        'message_id'      => $email->messageId(),
        'from_name'       => optional($email->from())->name,
        'from_email'      => optional($email->from())->address,
        'subject'         => $email->subject(),
        'to'              => $email->to(),
        'cc'              => $email->cc(),
        'headers'         => $email->headers(),
        'text_body'       => $email->text(),
        'html_body'       => $email->html(), // sanitize on render
        'received_at'     => now(),
    ]);

    foreach ($email->attachments() as $att) {
        $path = "temp-mail/{$saved->id}/".$att->getFilename();
        Storage::disk('public')->put($path, $att->content());
        TempAttachment::create([
            'temp_email_id' => $saved->id,
            'filename'      => $att->getFilename(),
            'mime'          => $att->getContentType(),
            'size'          => strlen($att->content()),
            'disk'          => 'public',
            'path'          => $path,
        ]);
    }
});