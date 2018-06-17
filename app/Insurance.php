<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function claim()
    {
        return $this->hasOne(Claim::class);
    }

    public function package()
    {
        return $this->belongsTo(Insurance::class);
    }

}
