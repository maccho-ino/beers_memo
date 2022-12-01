@extends('layouts.app')

@section('title', 'STYLE')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">{{ $style->name }}</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

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
                    <img class="card-img-top mt-1" src="{{ $post->image_path }}" alt="Card image">
                    @else
                    <img class="card-img-top mt-1" src="{{ asset('/image/noimage_beer.jpg') }}" alt="Card image">
                    @endif
                    <p class="card-text">
                    <h5 class="card-title text-light mt-2">{{ Str::limit($post->name, 16) }}</h5>
                    <p class="card-text text-light">{{ $post->country->name }}</p>
                    <a href="{{ action('TopController@detail', $post->id) }}" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<div class="text-center">
    <a href="{{ action('TopController@style') }}"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> STYLE 一覧に戻る</a>
</div>

@endsection