<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', 'TopController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user','middleware' => 'auth'], function() {
    Route::get('mypage', 'User\MainController@show');
    Route::get('create', 'User\MainController@add');
    Route::post('create', 'User\MainController@create');
    Route::get('index', 'User\MainController@index');
    Route::get('profile', 'User\MainController@profile');
});