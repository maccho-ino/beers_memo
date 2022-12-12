<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guard = array('id');

    public static $rules = array(
        'intruduction' => 'max:100'
    );

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
