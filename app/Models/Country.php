<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function getLists()
    {
        $countries = Country::pluck('name', 'id');

        return $countries;
    }

    public function mymemos()
    {
        return $this->hasMany(Mymemo::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
