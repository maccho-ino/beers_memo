<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mymemo;

class TopController extends Controller
{
    public function show()
    {
        $posts = Mymemo::orderBy('created_at', 'desc')->get();
        $posts->load('user');

        // $posts = Mymemo::paginate(12);
        // dd($posts);

        return view('front.top')->with(['posts' => $posts]);;
    }

    public function style()
    {
        return view('front.style');
    }

    public function country()
    {
        return view('front.country');
    }

    public function index()
    {
    }


    public function detail($id)
    {
        $posts = Mymemo::where('id', $id)->first();

        return view('front.detail')->with(['posts' => $posts]);
    }
}
