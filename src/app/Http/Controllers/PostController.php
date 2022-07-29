<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class PostController extends Controller
{
    public function post(Request $request)
    {

        // ↓ログイン実装後
        // $user_id = Auth::id();
        // $posts->user_id = $request->user_id;

        $language = "";
        //↓null判定
        if ($request->html != null) {
            $language = $language . $request->html;
        }
        if ($request->css != null) {
            $language = $language . $request->css;
        }
        if ($request->php != null) {
            $language = $language . $request->php;
        }
        if ($request->java != null) {
            $language = $language . $request->java;
        }
        if ($request->js != null) {
            $language = $language . $request->js;
        }

        //postsテーブル->登録処理
        $posts = new Post;
        $posts->user_id = "1";
        $posts->port_url = $request->port;
        $posts->class = $request->class;
        $posts->git_url = $request->git;
        $posts->comment = $request->comment;
        $posts->use_language = $language;
        $posts->img_url = $request->photo;
        $posts->save();

        return redirect('/');
    }
}
