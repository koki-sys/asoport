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
        // s3のupload処理の修正 koki-sys
        $img_url = "";
        if (preg_match("/https:\/\/asoport-s3.s3.ap-northeast-3.amazonaws.com\/.*/", $request->img_url) == 1) {
            $img_url = $request->img_url;
        } else {
            $path = Storage::disk('s3')->putFile('asoport', $request->photo, 'public');
            $img_url = Storage::disk('s3')->url($path);
        }

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
        $posts->img_url = $img_url;
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
