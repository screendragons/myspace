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

Route::resource('/profile', 'ProfileController');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::post('/profile', 'ProfileController@update_image');

// Route::post('/profile/{profile}', 'ProfileController@update')->name('profile.update');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');

// Route::get('/profile/upload', 'UploadController@index')->name('upload');

Route::resource('/likes', 'LikesController');
Route::get('/likes', 'LikesController@index')->name('likes');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

