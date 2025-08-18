<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempMailbox extends Model
{
    protected $fillable = ['local_part', 'temp_domain_id', 'full_address', 'expires_at', 'user_id'];

    protected $dates = ['expires_at'];

    public function domain()
    {
        return $this->belongsTo(TempDomain::class);
    }

    public function emails()
    {
        return $this->hasMany(TempEmail::class)->latest('received_at');
    }
}
