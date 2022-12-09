@extends('layouts.app')

@section('title', 'マイページ')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My page</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Body Start -->

<div class="container">
    <div class="row">
        <div class="col-lg-4 text-center">

            @if ($user)
            <img class="rounded-circle img-fluid d-block mx-auto border border-dark" src="{{ $user->my_pic }}" width="150" height="150">
            @else
            <i class="fa fa-user-circle fa-5x text-primary mx-auto"></i>
            @endif

            <h4 class="text-dark mt-2">{{ Auth::user()->name }}</h4>
        </div>
        <div class="col-lg-8">
            <h4 class="text-dark">PROFILE</h4>
            <div class="comment h-50">{{ Auth::user()->introduction }}</div>
            <div class="row d-flex flex-row center-block">
                <div class="col mb-2">
                    <a href="profile"><button type="button" class="center-block btn btn-outline-primary"><i class="fa fa-user-plus"></i> PROFILE編集</button></a>
                </div>
                <div class="col mb-2">
                    <a href="create"><button type="button" class="btn btn-outline-primary"><i class="fa fa-plus-square"></i> MY MEMO作成</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4><a href="index" class="text-dark">MY MEMO 一覧 <i class="fa fa-arrow-right"></i></a></h4>
        </div>


        <div class="container">
            <div class="row mt-3">
                @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card-group bg-dark mb-3">
                        <div class="card-body">
                            <div class="card-top">
                            </div>
                            @if($post->image_path)
                            <img class="card-img-top mt-1" src="{{ $post->image_path }}" alt="Card image">
                            @else
                            <img class="card-img-top mt-1" src="{{ asset('/image/noimage_beer.jpg') }}" alt="Card image">
                            @endif
                            <p class="card-text">
                            <h5 class="card-title text-light mt-2">{{ Str::limit($post->name, 16) }}</h5>
                            <p class="card-text text-light">{{ $post->country->name }}</p>
                            <a href="{{ action('User\MainController@detail', $post->id) }}" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection