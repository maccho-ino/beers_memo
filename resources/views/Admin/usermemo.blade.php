@extends('layouts.admin')

@section('title', 'MEMO 詳細')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">USER MEMO</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Start -->

<div class="container">

    <div class="row mb-5">

        <div class="col-2 text-center">
            <i class="fa fa-user-circle fa-5x text-primary me-3"></i>
        </div>
        <div class="col-10 d-inline-flex flex-row align-items-center">
            <h4 class="p-1">{{ $posts->user->name }}</h4>
        </div>
    </div>




    <div class="row">
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
            <button type="button" class="center-block btn btn-outline-primary mt-5 ml-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> MEMO 削除</button>
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <div class="d-inline-flex flex-row align-items-center">
            <a href="{{ action('Admin\MainController@show') }}" class="btn btn-outline-primary mr-5"><i class="fa fa-home" aria-hidden="true"></i> 管理者ページに戻る</a>
            <h4 class="text-primary"> | </h4>
            <button type="button" onClick="history.back()" class="btn btn-outline-primary ml-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> 戻る</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MEMOの削除</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                MEMO を削除しますか？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                <a href="{{ action('Admin\MainController@delete', $posts->id) }}"><button type=" button" class="btn btn-primary"><i class="fa fa-trash"></i> YES</button></a>
            </div>
        </div>
    </div>
</div>


@endsection