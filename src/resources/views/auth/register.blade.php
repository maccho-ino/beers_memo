@extends('layouts.app')

@section('title', 'ユーザー登録')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">Register</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <p class="text-primary">メンバー登録</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid contact position-relative px-5" style="margin-top: 15px;">
    <!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <form method="POST" action="{{ route('register') }}">
                <div class="row g-3">
                    <div class="col-sm-12">

                        @csrf

                        <input id="name" type="text" class="form-control bg-light border-primary px-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="名前" style="height: 55px;" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="col-sm-12">
                        <input id="email" type="email" class="form-control bg-light border-primary px-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレス" style="height: 55px;" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="col-sm-12">
                        <input id="password" type="password" class="form-control bg-light border-primary px-4 @error('password') is-invalid @enderror" name="password" placeholder="パスワード" style="height: 55px;" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="col-sm-12">
                        <input id="password-confirm" type="password" class="form-control bg-light border-primary px-4" name="password_confirmation" placeholder="パスワードの確認" style="height: 55px;" required autocomplete="new-password">

                    </div>
                    <!-- <div class="col-sm-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div> -->
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary border-inner w-100 py-3">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>

            <!-- <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
        </div>
    </div>
</div>
@endsection