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
            <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="/storage/profile_images/{{ Auth::id() }}.jpg" alt="user icon">
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
            <h4 class="text-dark">MY MEMO 一覧</h4>
        </div>
        <div class="card-deck my-4">
            <div class="card col-md-3 bg-dark">
                <img class="card-img-top mt-3" src="{{ asset('image/sample01.jpg')}}" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title text-light">ビールの名前</h5>
                    <p class="card-text text-light">国名</p>
                    <a href="#!" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection