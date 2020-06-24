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
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});
Route::post('/profile/submit', 'MessagesController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->middleware('auth');;

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Auth::routes();

Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
