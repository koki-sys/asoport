<?php

use Illuminate\Support\Facades\Auth;

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

Route::post('/post_submit', 'PostController@post');
Route::post('/search', 'SearchController@PostIndex');
Route::get('/', 'TopController@index');
Route::get('/create', 'PostController@create');
Route::post('/detail', 'detailController@index');
Route::get('/profile', 'ProfileIndex@index');
Route::get('/profile_edit', 'profileeditController@edit');
Route::post('/prof_edit_submit', 'profileeditController@index');
Route::post('/post_edit', 'PostEditController@post');
Route::get('/post_edit/{id}', 'PostEditController@edit');
Route::post('/post/delete', 'PostDelete@postdelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
