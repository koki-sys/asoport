<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostConfirmController extends Controller
{
    public function post(Request $request)
    {
        $port = $request->port;
        $git = $request->git;
        $comment = $request->comment;
        $img_url = $request->photo;

        $language = "";
        if (!empty($request->lang)) {
            $language = implode(" / ", $request->lang);
        }
        //$langs = implode(" ",$lang);
        //$lang = $request->input('lang');

        if (preg_match("/(https:\/\/asoport-s3.s3.ap-northeast-3.amazonaws.com\/.*)|(img\/.*)/", $img_url) == 0) {
            // 確認画面のための処理する。
            $imgfile = $request->file('photo');
            $img_url = $imgfile->store('public/temp');
            dd($img_url);
        }

        // リファラを使って、actionを変える。
        $is_edit_referer = (preg_match('/^https?:\/\/.+\/(post_edit\/[0-9]+)$/u', $request->header('referer'), $m) == 1) ? true : false;
        $is_create_referer = (preg_match('/^https?:\/\/.+\/create$/u', $request->header('referer'), $m) == 1) ? true : false;

        $action = "";
        $btn_title = "";
        if ($is_edit_referer) {
            $action = url("post_edit");
            $btn_title = "編集する";
        } else if ($is_create_referer) {
            $action = url("post_submit");
            $btn_title = "投稿する";
        }

        $input_data = [
            'id' => $request->id,
            'port' => $port,
            'git' => $git,
            'comment' => $comment
        ];

        return view('posts.confirm', compact('img_url', 'input_data', 'language', 'action', 'btn_title'));
        //return view('posts.create_confirm',compact('img_url','input_data'));
    }
}
