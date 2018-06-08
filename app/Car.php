<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function insurance()
    {
        return $this->hasOne(Insurance::class);
    }

    public function claim()
    {
        return $this->hasOne(Claim::class);
    }
}
