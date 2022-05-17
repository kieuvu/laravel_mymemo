<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Client\HomeController@index')->name('home');

Route::middleware(['guest', 'prevent-back-history'])->group(function () {
    Route::prefix('/register')->group(function () {
        Route::get('/', "App\Http\Controllers\Auth\RegisterController@show")->name("auth.register.show");
        Route::post('/auth', "App\Http\Controllers\Auth\RegisterController@register")->name("auth.register.auth");
    });

    Route::prefix('/login')->group(function () {
        Route::get('/', "App\Http\Controllers\Auth\LoginController@show")->name("auth.login.show");
        Route::post('/auth', "App\Http\Controllers\Auth\LoginController@login")->name("auth.login.auth");
    });
});

Route::middleware('auth')->get('/logout', "App\Http\Controllers\Auth\LoginController@logout")->name("auth.logout");

Route::prefix('/my_gallery')->middleware('auth')->group(function () {
    Route::get("/", 'App\Http\Controllers\Client\PostController@index')->name('client.post.show');

    Route::prefix('/create')->group(function () {
        Route::get('/', 'App\Http\Controllers\Client\PostController@showCreateForm')->name('client.post.creat.show');
        Route::post('/process', 'App\Http\Controllers\Client\PostController@createPost')->name('client.post.creat.process');
    });
});


Route::get("/search", "App\Http\Controllers\Client\PostController@search");
