<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;
use InterventionImage;

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
        $user = Auth::user();
        // dd($request->myPic);
        $image = InterventionImage::make($request->myPic);
        $image->fit(300, 300);
        // dd($image);

        $filePath = storage_path('app/public/profile_images');

        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            Storage::disk('local')->delete('public/profile_images/' . Auth::id() . '.jpg');
        }

        $image->save($filePath . '/' . Auth::id() . '.jpg');

        // $path = $request->myPic->storeAs('public/profile_images', Auth::id() . '.jpg');
        // $user->my_pic = basename($path);

        $user->save();
        // dd('hello');
        return redirect()->action('User\MainController@show', ['user' => $user]);
    }

    public function create(Request $request)
    {

        $user = Auth::user();
        $user->introduction = $request->introduction;
        $user->save();

        return redirect('user/mypage');
    }
}
