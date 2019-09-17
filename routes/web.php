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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/profile/upload', 'UploadController@index')->name('upload');

Route::get('/profile/likes', 'LikesController@index')->name('likes');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

