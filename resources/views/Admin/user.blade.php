@extends('layouts.admin')

@section('title', '管理者ページ')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">USER 一覧</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <nav class="navbar navbar-light">
            <form class="form-inline" method="GET" action="{{ action('Admin\MainController@userIndex') }}">
                <input class="form-control mr-sm-2" type="text" placeholder="User name" name="keyword" value="{{ $keyword }}">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>

    <div class="row mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                </tr>
            </thead>
            @if($is_sarched)
            @foreach($datas as $data)
            <tbody>
                <tr>
                    <td><a href="{{ action('Admin\MainController@userDetail', ['id' => $data->id]) }}">{{ $data->id }}</a></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                </tr>
            </tbody>
            @endforeach
            @else
            @foreach($users as $user)
            <tbody>
                <tr>
                    <td><a href="{{ action('Admin\MainController@userDetail', ['id' => $user->id]) }}">{{ $user->id }}</a></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
            @endforeach
            @endif
        </table>
        @if(!$is_sarched)
        <div class="d-flex justify-content-center mt-4"> {{ $users->links() }}</div>
        @endif
    </div>



    <div class="text-center">
        <a href="{{ action('Admin\MainController@show') }}"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> 管理者ページに戻る</a>
    </div>

</div>>



@endsection