<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    public function getLists()
    {
        $styles = Style::pluck('name', 'id');

        return $styles;
    }

    public function mymemos()
    {
        return $this->hasMany(Mymemo::class);
    }

    public function brewing()
    {
        return $this->belongsTo(Brewing::class);
    }
}
