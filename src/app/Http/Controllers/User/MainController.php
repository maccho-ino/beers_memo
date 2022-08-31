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
        $posts->load('user');
        // dd($posts);

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

    public function detail($id)
    {
        $posts = Auth::user()->mymemos()->where('id', $id)->first();
        // dd($posts);

        return view('user.detail')->with(['posts' => $posts]);
    }

    public function edit(Request $request)
    {
        $posts = Mymemo::find($request->id);
        if (empty($posts)) {
            abort(404);
        }

        return view('user.edit', ['mymemo_form' => $posts]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Mymemo::$rules);
        // Mymemo Modelからデータを取得
        $mymemo = Mymemo::find($request->id);
        // 送信されてきたフォームデータを格納
        $mymemo_form = $request->all();
        if ($request->remove == 'true') {
            $mymemo_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/mymemo_images');
            $mymemo_form['image_path'] = basename($path);
        } else {
            $mymemo_form['image_path'] = $mymemo->image_path;
        }

        unset($mymemo_form['image']);
        unset($mymemo_form['remove']);
        unset($mymemo_form['_token]']);

        // 該当するデータを上書きして保存
        $mymemo->fill($mymemo_form)->save();

        return redirect('user/index');
    }

    public function delete(Request $request)
    {
        $mymemo = Mymemo::find($request->id);
        // dd($mymemo);
        $mymemo->delete();

        return redirect('user/index');
    }
}
