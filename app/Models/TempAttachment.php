<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempAttachment extends Model
{
    protected $fillable = ['temp_email_id', 'filename', 'mime', 'size', 'disk', 'path'];

    public function email()
    {
        return $this->belongsTo(TempEmail::class);
    }
}
