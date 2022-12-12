<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Mymemo;
use App\Models\Country;
use App\Models\Style;
use InterventionImage;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $posts = Auth::user()->mymemos()->orderBy('created_at', 'desc')->paginate(8);
        $posts->load('user');
        // dd($posts);

        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            
            $is_image = true;
        }

        return view('user.mypage')->with(['posts' => $posts, 'is_image' => $is_image]);

        // return view('user.mypage');
    }

    public function add()
    {
        $country = new Country;
        $countries = $country->getLists()->prepend('原産国選択', '');

        $style = new Style;
        $styles = $style->getLists()->prepend('スタイル選択', '');

        return view('user.create')->with(['countries' => $countries, 'styles' => $styles]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Mymemo::$rules);

        $mymemo = new Mymemo;
        $mymemo->user_id = Auth::id();
        $form = $request->all();

        if (isset($form['image'])) {
            $image = InterventionImage::make($request->file('image'));
            // dd($request->file('image'));
            // 回転を補正
            $image->orientate();
            // リサイズ
            $image->fit(
                600,
                800,
                function ($constraint) {
                    // 縦横比を保持したままにする
                    $constraint->aspectRatio();
                    // 小さい画像は大きくしない
                    $constraint->upsize();
                }
            );
            $filePath = storage_path('app/public/mymemo_images');
            $filePath .= '/' . $request->file('image')->getClientOriginalName() . '.png';
            $image->save($filePath);

            $path = Storage::disk('s3')->putFile('/', new File($filePath), 'public');
            $mymemo->image_path = Storage::disk('s3')->url($path);
        } else {
            $mymemo->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);

        $mymemo->fill($form);
        // dd($mymemo);
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
        // dd($posts);
        if (empty($posts)) {
            abort(404);
        }

        $country = new Country;
        $countries = $country->getLists();

        $style = new Style;
        $styles = $style->getLists();
        // dd($posts);
        return view('user.edit', ['mymemo_form' => $posts, 'countries' => $countries, 'styles' => $styles]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Mymemo::$rules);
        // Mymemo Modelからデータを取得
        $mymemo = Mymemo::find($request->id);
        // dd($mymemo);
        // 送信されてきたフォームデータを格納
        $mymemo_form = $request->all();
        if ($request->remove == 'true') {
            $mymemo_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = Storage::disk('s3')->putFile('/',$mymemo_form['image'],'public');
            $mymemo_form['image_path'] = Storage::disk('s3')->url($path);
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

        return redirect('user/mypage');
    }
}
