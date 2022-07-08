<?php
use Illuminate\Support\Facades\Auth;
use App\post;
use Illuminate\Http\Request;
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


Route::get('/post', function () {
    return view('post_test');
});
Route::post('/post_submit', 'PostController@post');
Route::get('/search', 'SearchController@PostIndex');
Route::get('/','TopController@index');
