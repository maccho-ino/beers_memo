@extends('layouts.app')

@section('title', 'プロフィール')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My Profile</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Bdy Start -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 text-center d-flex flex-column">
            @if ($is_image)
            <figure>
                <img class="rounded-circle img-fluid d-block mx-auto border border-dark" src="/storage/profile_images/{{ Auth::id() }}.jpg" width="150" height="150">
            </figure>
            @else
            <i class="fa fa-user-circle fa-5x text-primary me-3"></i>
            @endif
            <a href="image"><button type="button" class="btn btn-outline-primary mt-4"><i class="fa fa-camera"></i> 画像を変更</button></a>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <h4 class="text-dark">{{ Auth::user()->name }}</h4>
                <p class="text-dark">プロフィール/自己紹介</p>
                <form method="POST" action="{{ action('User\ProfileController@create') }}">
                    {{ csrf_field() }}
                    <textarea class="form-control border border-primary" name="introduction" rows="8">{{ Auth::user()->introduction }}</textarea>
                    <input type="submit" class="btn btn-outline-primary mt-2" value="更新">
                </form>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ action('User\MainController@show') }}"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
    </div>
</div>

@endsection