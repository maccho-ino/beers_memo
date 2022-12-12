@extends('layouts.app')

@section('title', 'Myメモ作成')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My memo 作成</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <p class="text-primary">メンバー登録</p> -->
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- NewPost Start -->
<div class="container-fluid contact position-relative px-5" style="margin-top: 15px;">
    <!-- <div class="container"> -->
    <!-- <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-geo-alt fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Our Office</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-envelope-open fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div> -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{ action ('User\MainController@create') }}" method="POST" enctype="multipart/form-data">

                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="row g-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="名前" name="name" value="{{ old('name') }}" style="height: 55px;">
                    </div>

                    <div class="col-sm-12">
                        <select class="form-control bg-light border-primary px-4" id="country_id" name="country_id" value="{{ old('country_id') }}" placeholder="原産国" style="height: 55px;" type="text">
                            @foreach($countries as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class=" col-sm-6">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="原産国" name="country" value="{{ old('country') }}" style="height: 55px;">
                    </div> -->

                    <div class="col-sm-12">
                        <select class="form-control bg-light border-primary px-4" id="style_id" name="style_id" placeholder="スタイル" style="height: 55px;" type="text">
                            @foreach($styles as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="col-sm-6">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="スタイル" name="style" value="{{ old('style') }}" style="height: 55px;">
                    </div> -->
                    <div class="col-sm-6 input-group">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="アルコール度数" name="degree" value="{{ old('degree') }}" style="height: 55px;">
                        <div class="input-group-append">
                            <span class="input-group-text border-primary bg-primary text-dark" id="text1b">%</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="飲んだor買った場所" name="place" value="{{ old('place') }}" style="height: 55px;">
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control bg-light border-primary px-4 py-3" rows="4" placeholder="コメント" name="coment" value="{{ old('coments') }}"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    @csrf
                    <bitton type="submit" class="btn btn-primary border-inner w-100 py-3" value="作成">
                        {{ __('作成') }}
                    </button>
                </div>
        
            </form>
        </div>

        <a href="mypage" class="text-center mt-3"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>

    </div>
</div>
</div>
</div>
<!-- NewPost End -->
@endsection