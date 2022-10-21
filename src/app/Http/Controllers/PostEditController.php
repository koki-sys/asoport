<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostEditController extends Controller
{
    public function post(Request $request)
    {
        // null判定
        if (!empty($request->lang)) {
            $language = implode(" / ", $request->lang);
        }

        /**
         * s3アップロード処理
         */
        $path = Storage::disk('s3')->putFile('asoport', $request->photo, 'public');
        $img_url = Storage::disk('s3')->url($path);


        //postsテーブル->投稿内容変更処理
        $postId = $request->id;
        $userId = Auth::id();
        $posts = \App\Post::where('id', $postId)
        ->where('user_id', $userId)
        ->first();
        $posts->port_url = $request->port;
        $posts->git_url = $request->git;
        $posts->comment = $request->comment;
        $posts->use_language = $language;
        $posts->img_url = $img_url;
        $posts->save();

        return redirect('/');
    }
}
