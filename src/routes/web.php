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
Route::get('style', 'TopController@style');
Route::get('country', 'TopController@country');
Route::get('detail', 'TopController@detail');
Route::get('detail/{id}', 'TopController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('mypage', 'User\MainController@show')->name('user.mypage');
    Route::get('create', 'User\MainController@add');
    Route::post('create', 'User\MainController@create');
    Route::get('index', 'User\MainController@index');
    Route::get('profile', 'User\ProfileController@index');
    Route::post('profile', 'User\ProfileController@create');
    Route::post('image', 'User\ProfileController@store');
    Route::get('image', 'User\ProfileController@add');
    Route::get('detail', 'User\MainController@detail');
    Route::get('detail/{id}', 'User\MainController@detail');
    Route::get('edit/{id}', 'User\MainController@edit');
    Route::post('edit', 'User\MainController@update');
    Route::get('user/delete.{id}', 'User\MainController@delete');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.index');
});
