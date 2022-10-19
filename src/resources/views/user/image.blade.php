@extends('layouts.app')

@section('title', 'プロフィール変更')

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
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            @if ($is_image)
            <figure>
                <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="/storage/profile_images/{{ Auth::id() }}.jpg">
            </figure>
            @else
            <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="{{ asset('/image/noimage.png')}}">
            @endif
            <form method="POST" action="{{ action('User\ProfileController@store') }}" enctype="multipart/form-data" class="mt-4">
                {{ csrf_field() }}
                <input type="file" name="myPic">
                <input type="submit">
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <a href="mypage"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
        </div>
    </div>
</div>

@endsection