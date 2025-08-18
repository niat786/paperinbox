<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempDomain extends Model
{
    protected $fillable = ['domain', 'enabled'];

    public function mailboxes()
    {
        return $this->hasMany(TempMailbox::class);
    }
}
