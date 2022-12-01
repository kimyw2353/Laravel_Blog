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
    return view('app');
})->name('home');

Route::get('/something', 'TestController@test');

// Post
Route::get('/post', 'PostController@index');
Route::post('/post', 'PostController@store');
Route::get('/post/{id}', 'PostController@show');
Route::get('/post/{id}/edit', 'PostController@edit');
Route::put('/post/{id}', 'PostController@update');

//Login, Logout
Route::get('/login', 'UserController@create');

//Register
Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

//...
Route::get('/hello', 'HelloController@index');
