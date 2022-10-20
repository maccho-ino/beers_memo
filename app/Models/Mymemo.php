<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mymemo extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'country_id' => 'required',
    );

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
    }
}
