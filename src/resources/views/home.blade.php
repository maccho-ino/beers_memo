@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 text-center">
            <!-- <div class="card"> -->
            <!-- <div class="card-header">Dashboard</div> -->

            <!-- <div class="card-body"> -->
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            メンバー登録完了！
            <p>さっそく MY MEMO を作成しよう</p>
            <a href="{{ action('User\MainController@show') }}" class="mt-10 text-primary"><i class="fa fa-arrow-circle-left"></i> MY PAGEへ</a>
            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection