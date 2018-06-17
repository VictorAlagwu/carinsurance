<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $guarded = [];

    public function insurances()
    {
        return $this->hasMany(Insurance::class);
    }
}
