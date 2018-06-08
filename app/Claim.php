<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function insurance()
    {
        return $this->belongsTo(Insurance::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
