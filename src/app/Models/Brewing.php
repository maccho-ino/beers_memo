<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brewing extends Model
{
    public function styles()
    {
        return $this->hasMany(Style::class);
    }
}
