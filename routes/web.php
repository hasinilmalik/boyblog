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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts','PostController@index');

Route::get('/posts/create','PostController@create');
Route::post('/posts/store','PostController@store');

Route::get('/posts/{post:slug}/edit','PostController@edit');
Route::patch('/posts/{post:slug}/edit','PostController@update');

Route::delete('/posts/{post:slug}/delete','PostController@destroy');

Route::get('/posts/{post:slug}','PostController@show');

Route::get('/categories/{category:slug}','CategoryController@show');