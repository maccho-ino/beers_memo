<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mymemo;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show()
    {
        return view('admin.index');
    }

    public function userIndex(Request $request)
    {
        $users = User::oldest()->paginate(10);
        $keyword = $request->input('keyword');
        $query = User::query();
        // if (empty($keyword)) {
        //     return view('admin.user');
        // }

        if (!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")->orWhere('email', 'LIKE', "%{$keyword}%")->orderBy('created_at', 'asc');
            $datas = $query->get();
            // dd($datas);
        } else {
            $datas = [];
        }

        $is_sarched = !empty($keyword);


        return view('admin.user')->with(['users' => $users, 'keyword' => $keyword, 'datas' => $datas, 'is_sarched' => $is_sarched]);
    }

    public function mymemoIndex()
    {
        return view('admin.mymemo');
    }

    public function userDetail(Request $request)
    {
        $user = User::find($request->id);
        $posts = Mymemo::where('user_id', $user->id)->oldest()->get();

        return view('admin.userdetail')->with(['user' => $user, 'posts' => $posts]);
    }

    public function usermemo($id)
    {
        $posts = Mymemo::where('id', $id)->first();

        return view('admin.usermemo')->with(['posts' => $posts]);
    }

    public function delete(Request $request)
    {
        $posts = Mymemo::find($request->id);
        $posts->delete();

        return redirect()->route('admin.userdetail', ['id' => $posts->user->id]);
    }

    public function userDestroy(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();


        return redirect('admin/user-index');
    }
}
