<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Language;
use Illuminate\Support\Facades\Auth;

class PostEditController extends Controller
{
    public function post(Request $request)
    {
        //postsテーブル->投稿内容変更処理
        $postId = $request->id;
        $userId = Auth::id();
        $posts = \App\Post::where('id', $postId)
            ->where('user_id', $userId)
            ->first();
        $posts->port_url = $request->port;
        $posts->git_url = $request->git;
        $posts->comment = $request->comment;
        $posts->use_language = $request->lang;
        $posts->img_url = $request->img_url;
        $posts->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $langs = Language::all();
        $post = Post::find($id);

        // 使用言語の処理
        $checklangs = explode(" / ", $post->use_language);

        return view('posts.post_edit', compact('langs', 'post', 'checklangs'));
    }
}
