<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Models\Profile;
use InterventionImage;

class ProfileController extends Controller
{
    #プロフィール入力フォームの表示
    public function index(Request $request)
    {
        $user = Auth::user();
        $is_image = false;
        if (Storage::disk('s3')->exists(Auth::user()->my_pic)) {
            $is_image = true;
        }


        return view('user.profile', ['is_image' => $is_image, 'user' => $user]);
    }

    #プロフィール画像の変更フォームの表示
    public function add(Request $request)
    {
        $user = Auth::user();
        $is_image = false;
        if (Storage::disk('s3')->exists(Auth::user()->my_pic)) {
            $is_image = true;
        }


        return view('user.image', ['is_image' => $is_image, 'user' => $user]);
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
        $filePath .= '/' . Auth::id() . '.png';

        $image->save($filePath);

        $path = Storage::disk('s3')->putFile('/', new File($filePath), 'public');
        // $profile = new Profile;
        $user->my_pic = Storage::disk('s3')->url($path);



        // if (Storage::disk('s3')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
        //     Storage::disk('s3')->delete('public/profile_images/' . Auth::id() . '.jpg');
        // }


        // $image->save($filePath . '/' . Auth::id() . '.jpg');

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
