<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mymemo;
use App\Models\Country;
use App\Models\Style;
use App\Models\User;
use App\Models\Area;
use App\Models\Brewing;

class TopController extends Controller
{
    public function show()
    {
        $posts = Mymemo::orderBy('created_at', 'desc')->paginate(8);
        $posts->load('user');

        return view('front.top')->with(['posts' => $posts]);
    }

    public function style()
    {

        return view('front.style', ['brewings' => Brewing::all()]);
    }

    public function country()
    {

        return view('front.country', ['areas' => Area::all()]);
    }

    public function index()
    {
    }


    public function detail($id)
    {
        $posts = Mymemo::where('id', $id)->first();

        return view('front.detail')->with(['posts' => $posts]);
    }

    public function countryIndex(Request $request)
    {
        $country = Country::find($request->id);
        $posts = Mymemo::where('country_id', $country->id)->orderBy('created_at', 'desc')->paginate(12);

        return view('front.countryindex', ['country' => $country, 'posts' => $posts]);
    }

    public function styleIndex(Request $request)
    {
        $style = Style::find($request->id);
        $posts = Mymemo::where('style_id', $style->id)->orderBy('created_at', 'desc')->paginate(12);

        return view('front.styleindex', ['style' => $style, 'posts' => $posts]);
    }

    public function userpage(Request $request)
    {
        $user = User::find($request->id);
        // dd($user);
        $posts = Mymemo::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();


        return view('front.userpage', ['user' => $user, 'posts' => $posts]);
    }
}
