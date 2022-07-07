<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show()
    {
        return view('user.mypage');
    }
    
    public function add()
    {
        return view('user.create');
    }

    public function create(Request $request)
    {
        return redirect('user/create');
    }

    public function index(Request $request)
    {
        return view('user.index');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
