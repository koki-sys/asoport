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
Route::post('/detail', 'DetailController@index');
Route::get('/profile', 'ProfileIndex@index');
Route::get('/profile_edit', 'ProfileeditController@edit');
Route::post('/user_delete', 'UserDeleteController@userdelete');
Route::post('/prof_edit_submit', 'ProfileeditController@index');
Route::post('/post_edit', 'PostEditController@post');
Route::get('/post_edit/{id}', 'PostEditController@edit');
Route::post('/post/delete', 'PostDeleteController@postdelete');
Route::post('/post_submit_confirm', 'PostConfirmController@post');
Route::post('/public_on', 'PublicController@post_public');
Route::post('/public_off', 'PublicController@post_unpublic');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
