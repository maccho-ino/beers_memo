@extends('layouts.app')

@section('title', 'USERS MEMO')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">USERS MEMO</h1>
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
            @if ($user->my_pic)
            <img class="rounded-circle img-fluid d-block mx-auto border border-dark" src="{{ asset('/storage/profile_images/'. $user->id . '.jpg') }}" width="150" height="150">
            @else
            <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="{{ asset('/image/user.png') }}">
            <i class="fa fa-user-circle fa-5x text-primary me-3"></i>
            @endif

            <h4 class="text-dark text-center mt-2">{{ $user->name }}</h4>
        </div>
        <div class="col-lg-7">
            <h4 class="text-dark">PROFILE</h4>
            <div class="h-50">
                {{ $user->introduction }}
            </div>
            <!-- <div class="row">
                <div class="col-sm-3">
                    <a href="profile"><button type="button" class="center-block btn btn-outline-primary"><i class="fa fa-user-plus"></i> PROFILE編集</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="create"><button type="button" class="btn btn-outline-primary"><i class="fa fa-plus-square"></i> MY MEMO作成</button></a>
                </div>
            </div> -->
        </div>
    </div>
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
                    <img class="card-img-top mt-1" src="{{ asset('storage/mymemo_images/' . $post->image_path) }}" alt="Card image">
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

</div>
</div>
@endsection