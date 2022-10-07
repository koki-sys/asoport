<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function post(Request $request)
    {
        // ↓ログイン実装後
        // $user_id = Auth::id();
        // $posts->user_id = $request->user_id;

        $language = "";
        $separate = " / ";
        //↓null判定
        if ($request->html != null) {
            $language = $language . $request->html . $separate;
        }
        if ($request->css != null) {
            $language = $language . $request->css . $separate;
        }
        if ($request->php != null) {
            $language = $language . $request->php . $separate;
        }
        if ($request->java != null) {
            $language = $language . $request->java . $separate;
        }
        if ($request->js != null) {
            $language = $language . $request->js . $separate;
        }

        mb_substr($language, 0, -3, "UTF-8");
        /**
         * s3アップロード処理
         */
        $path = Storage::disk('s3')->putFile('asoport', $request->photo, 'public');
        $img_url = Storage::disk('s3')->url($path);


        //postsテーブル->登録処理
        //
        $posts = new Post;
        $posts->user_id = Auth::id();
        $posts->port_url = $request->port;
        $posts->git_url = $request->git;
        $posts->comment = $request->comment;
        $posts->use_language = $language;
        $posts->img_url = $img_url;
        $posts->save();

        return redirect('/');
    }
}
