<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;

class ProfileController extends Controller
{
    #プロフィール入力フォームの表示
    public function index(Request $request)
    {
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }


        return view('user.profile', ['is_image' => $is_image]);
    }

    #プロフィール画像の変更フォームの表示
    public function add(Request $request)
    {
        $is_image = false;
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $is_image = true;
        }


        return view('user.image', ['is_image' => $is_image]);
    }

    #プロフィール画像の保存
    public function store(ProfileRequest $request)
    {
        // dd($request);
        $user = Auth::user();
        $path = $request->myPic->storeAs('public/profile_images', Auth::id() . '.jpg');
        $user->my_pic = basename($path);

        $user->save();
        // dd('hello');
        return redirect('user/mypage');
    }

    public function create(Request $request)
    {

        $user = Auth::user();
        $user->introduction = $request->introduction;
        $user->save();

        return redirect('user/mypage');
    }
}
