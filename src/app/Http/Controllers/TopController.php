<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function show()
    {
        return view('front.top');
    }

    public function style()
    {
        return view('front.style');
    }

    public function country()
    {
        return view('front.country');
    }
}
