@extends('layouts.app')

@section('title', 'トップページ')

@section('content')


<div class="container-fluid px-0 d-lg-block">
    <div class="row">
        <img src="{{ asset('image/top_sample.jpg')}}" class="img-fluid">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="text-center mt-4">
            <h1 class="mb-5">NEW !</h1>
        </div>
        <!-- <div class="card-deck my-4">
            @foreach($posts as $post)
            <div class="card col-md-3 bg-dark">
                <div class="card-body">
                    <div class="d-inline-flex flex-row align-items-center">
                        @if($post->user->my_pic)
                        <img class="rounded-circle img-fluid d-block mr-2 float-left" width="30" height="30" src="{{ asset('/storage/profile_images/'. $post->user->id . '.jpg') }}" alt="user image">
                        @else
                        <i class="fa fa-user-circle fa-2x text-primary me-3"></i>
                        @endif
                        <h5 class="text-light text-left mb-1">{{ $post->user->name }}</h5>
                    </div>
                    @if($post->image_path)
                    <img class="card-img-top mt-1" src="{{ asset('storage/mymemo_images/' . $post->image_path) }}" alt="Card image">
                    @else
                    <img class="card-img-top mt-1" src="{{ asset('/image/noimage.png') }}" alt="Card image">
                    @endif
                    <h5 class="card-title text-light mt-2">{{ $post->name }}</h5>
                    <p class="card-text text-light">{{ $post->country }}</p>
                    <a href="{{ action('TopController@detail', $post->id) }}" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach
        </div> -->

        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-3 col-md-4 col-sm-6 h-100">
                    <div class="card bg-dark mb-3">
                        <div class="card-body">
                            <div class="card-top" style="height: 40px;">
                                <h5 class="card-text text-light text-left mb-1 d-inline-flex flex-row align-items-center">
                                    @if($post->user->my_pic)
                                    <img class="rounded-circle img-fluid d-block mr-2 float-left" width="30" height="30" src="{{ asset('/storage/profile_images/'. $post->user->id . '.jpg') }}" alt="user image">
                                    @else
                                    <i class="fa fa-user-circle fa-2x text-primary me-3"></i>
                                    @endif
                                    {{ $post->user->name }}
                                </h5>
                            </div>
                            @if($post->image_path)
                            <img class="card-img-top mt-1" src="{{ asset('storage/mymemo_images/' . $post->image_path) }}" alt="Card image">
                            @else
                            <img class="card-img-top mt-1" src="{{ asset('/image/noimage.png') }}" alt="Card image">
                            @endif
                            <p class="card-text">
                            <h5 class="card-title text-light mt-2">{{ $post->name }}</h5>
                            <p class="card-text text-light">{{ $post->country }}</p>
                            <a href="{{ action('TopController@detail', $post->id) }}" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        @endsection