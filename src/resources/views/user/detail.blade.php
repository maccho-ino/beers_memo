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
        <div class="col-lg-4 text-center mb-md-5">
            @if($posts->image_path)
            <img class="rounded border border-dark img-fluid" src="{{ asset('storage/mymemo_images/' . $posts->image_path) }}" alt="image">
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
            <a href="{{ action('User\MainController@edit', $posts->id) }}"><button type="button" class="center-block btn btn-outline-primary mt-5"><i class="fa fa-pencil"></i> MY MEMO 編集</button></a>
            <button type="button" class="center-block btn btn-outline-primary mt-5 ml-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> MY MEMO 削除</button>
        </div>
    </div>
</div>

<!-- Button trigger modal -->




<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">削除</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                MY MEMO を削除しますか？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                <a href="{{ action('User\MainController@delete', $posts->id) }}"><button type=" button" class="btn btn-primary"><i class="fa fa-trash"></i> YES</button></a>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="{{ action('User\MainController@index') }}"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY MEMO 一覧に戻る</a>
</div>

@endsection