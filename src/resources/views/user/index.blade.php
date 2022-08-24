@extends('layouts.app')

@section('title', 'MY MEMO 一覧')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark bg-img p-5 mb-5">
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
    <div class="row">
        <div class="card-deck">
            @foreach($posts as $post)
            <div class="card col-md-3 bg-dark">
                <div class="card-body">
                    @if($post->image_path)
                    <img class="card-img-top mt-3" src="{{ asset('storage/mymemo_images/' . $post->image_path) }}" alt="Card image">
                    @else
                    <img class="card-img-top mt-3" src="{{ asset('/image/noimage.png') }}" alt="Card image">
                    @endif
                    <h5 class="card-title text-light">{{ $post->name }}</h5>
                    <p class="card-text text-light">{{ $post->country }}</p>
                    <a href="#" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="text-center">
    <a href="{{ action('User\MainController@show') }}"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
</div>

<!-- Main End -->

@endsection