@extends('layouts.app')

@section('title', 'MEMO 詳細')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">MEMO</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Start -->

<div class="container">
    <div class="row">

        <div class="d-inline-flex flex-row align-items-center mb-3 ml-4">
            @if($posts->user->my_pic)
            <img class="rounded-circle img-fluid d-block mr-2 float-left" width="30" height="30" src="{{ asset('/storage/profile_images/'. $posts->user->id . '.jpg') }}" alt="user image">
            @else
            <i class="fa fa-user-circle fa-2x text-primary me-3"></i>
            @endif
            <h5 class="text-dark text-left mb-1">{{ $posts->user->name }}</h5>
        </div>

        <div class="col-lg-4 text-center mb-md-5">
            @if($posts->image_path)
            <img class="rounded border border-dark img-fluid" src="{{ $posts->image_path }}" alt="image">
            @else
            <img class="rounded border border-dark img-fluid" src="{{ asset('/image/noimage_beer.jpg') }}" alt="image">
            @endif

        </div>
        <div class="col-lg-7 mt-3 pl-3">
            <h2 class="ml-2 overflow-hidden text-break">{{ $posts->name }}</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-flag"></i> 原産国</th>
                        <td>
                            @if($posts->country != null)
                            {{ $posts->country->name }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-beer"></i> スタイル</th>
                        <td>
                            @if($posts->style != null)
                            {{ $posts->style->name }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-tint"></i> アルコール度数</th>
                        <td>{{ $posts->degree }}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-map-marker"></i> 場所</th>
                        <td>{{ $posts->place }}</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-commenting"></i> コメント</th>
                        <td class="comment">{{ $posts->coment }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center mt-5">
    <div class="d-inline-flex flex-row align-items-center">
        <a href="{{ action('TopController@show') }}" class="btn btn-outline-primary mr-5"><i class="fa fa-home" aria-hidden="true"></i> TOP</a>
        <h4 class="text-primary"> | </h4>
        <button type="button" onClick="history.back()" class="btn btn-outline-primary ml-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> 戻る</button>
    </div>
</div>


@endsection