<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempEmail extends Model
{
    protected $fillable = ['temp_mailbox_id', 'message_id', 'from_name', 'from_email', 'subject', 'to', 'cc', 'headers', 'text_body', 'html_body', 'received_at'];

    protected $casts = ['to' => 'array', 'cc' => 'array', 'headers' => 'array', 'received_at' => 'datetime'];

    public function mailbox()
    {
        return $this->belongsTo(TempMailbox::class);
    }

    public function attachments()
    {
        return $this->hasMany(TempAttachment::class);
    }
}
