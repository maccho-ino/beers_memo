@extends('layouts.app')

@section('title', 'MY MEMO 一覧')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My MEMO 一覧</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Start -->

<div class="container">
    <div class="row mt-3">
        @foreach($posts as $post)
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
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
                    <h5 class="card-title text-light mt-2">{{ Str::limit($post->name, 12) }}</h5>
                    <p class="card-text text-light">{{ $post->country->name }}</p>
                    <a href="{{ action('User\MainController@detail', $post->id) }}" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


<div class="text-center">
    <a href="{{ action('User\MainController@show') }}"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
</div>

<!-- Main End -->

@endsection