<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Language;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post(Request $request)
    {
        //postsテーブル->登録処理
        $posts = new Post;
        $posts->user_id = Auth::id();
        $posts->port_url = $request->port;
        $posts->git_url = $request->git;
        $posts->comment = $request->comment;
        $posts->use_language = $request->lang;
        $posts->img_url = $request->img_url;
        $posts->save();

        return redirect('/');
    }

    public function create()
    {
        $langs = Language::all();

        return view('posts.create', compact('langs'));
    }
}


