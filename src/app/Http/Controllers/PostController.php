<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PostController extends Controller
{
    public function post(Request $request)
    {
        // s3upload処理追加 koki-sys
        $path = Storage::disk('s3')->putFile('asoport', new File($request->img_url), 'public');
        Storage::delete($request->img_url);
        $img_url = Storage::disk('s3')->url($path);

        //postsテーブル->登録処理
        $posts = new Post;
        $posts->user_id = Auth::id();
        $posts->port_url = $request->port;
        $posts->git_url = $request->git;
        $posts->comment = $request->comment;
        $posts->use_language = $request->lang;
        $posts->img_url = $img_url;
        $posts->save();

        return redirect('/');
    }

    public function create()
    {
        $langs = Language::all();

        return view('posts.create', compact('langs'));
    }
}
