<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function post(Request $request)
    {
        //$language = "";
        //↓null判定
        /*
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
        */

        // null判定（使用言語追加のため、処理の変更を行いました。）
        //if (!empty($request->lang)) {
        //    $language = implode(" / ", $request->lang);
        //}

        /**
         * s3アップロード処理
         */
        //$path = Storage::disk('s3')->putFile('asoport', $request->photo, 'public');
        //$img_url = Storage::disk('s3')->url($path);


        //postsテーブル->登録処理
        //
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


