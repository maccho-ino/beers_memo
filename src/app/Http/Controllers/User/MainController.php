<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Mymemo;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $posts = Auth::user()->mymemos()->orderBy('created_at', 'desc')->get();

        return view('user.mypage')->with(['posts' => $posts]);

        // return view('user.mypage');
    }

    public function add()
    {
        return view('user.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Mymemo::$rules);

        $mymemo = new Mymemo;
        $mymemo->user_id = Auth::id();
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$mymemo->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/mymemo_images');
            $mymemo->image_path = basename($path);
        } else {
            $mymemo->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $mymemo->fill($form);
        $mymemo->save();

        return redirect('user/mypage');
    }

    public function index(Request $request)
    {
        $posts = Auth::user()->mymemos()->orderBy('created_at', 'desc')->get();


        return view('user.index')->with(['posts' => $posts]);
    }

    public function profile()
    {
        return view('user.profile');
    }
}
