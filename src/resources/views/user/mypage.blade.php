@extends('layouts.app')

@section('title', 'マイページ')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark bg-img p-5 mb-5">
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
            <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="{{ asset('/storage/profile_images/'. Auth::id() .'.jpg') }}" alt="user icon">
            <h4 class="text-dark text-center mt-2">{{ Auth::user()->name }}</h4>
        </div>
        <div class="col-lg-7">
            <h4 class="text-dark">PROFILE</h4>
            <div class="h-50">
                {{ Auth::user()->introduction }}
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a href="profile"><button type="button" class="center-block btn btn-outline-primary"><i class="fa fa-user-plus"></i> PROFILE編集</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="create"><button type="button" class="btn btn-outline-primary"><i class="fa fa-plus-square"></i> MY MEMO作成</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <h4><a href="index" class="text-dark">MY MEMO 一覧</a></h4>
        </div>
        <div class="card-deck mt-5">
            @foreach($posts as $post)
            <div class="card col-md-3 bg-dark">
                <div class="card-body">
                    @if($post->image_path)
                    <img class="card-img-top mt-3" src="{{ asset('storage/mymemo_images/' . $post->image_path) }}" alt="Card image">
                    @else
                    <img class="card-img-top mt-3" src="{{ asset('/image/noimage.png') }}" alt="Card image">
                    @endif
                    <h5 class="card-title text-light mt-2">{{ $post->name }}</h5>
                    <p class="card-text text-light">{{ $post->country }}</p>
                    <a href="#!" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>

        @endsection