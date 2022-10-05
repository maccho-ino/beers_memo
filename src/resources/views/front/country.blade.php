@extends('layouts.app')

@section('title', '原産国カテゴリー')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">COUNTRY</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    @foreach($areas as $area)
    <div class="row mb-5">
        <h4 class="font-weight-bold mb-3 pb-1 border border-dark border-top-0 border-right-0 border-left-0">{{ $area->name }}</h4>
        @foreach($area->countries as $country)
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="{{ action('TopController@countryIndex', ['id' => $country->id]) }}" class="text-primary"><i class="fa fa-flag"></i> {{ $country->name }}
                @if($mymemo = $country->mymemos)
                ({{ $mymemo->count() }})
                @endif
            </a>
        </div>
        @endforeach
    </div>
    @endforeach
    <div class="row mt-5">
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="{{ action('TopController@countryIndex', ['id' => '22']) }}" class="text-primary"><i class="fa fa-flag"></i> その他</a>
        </div>
    </div>
</div>








@endsection