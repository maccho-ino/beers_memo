<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mymemo extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'country' => 'required',
    );

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
