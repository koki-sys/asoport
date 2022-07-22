<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends BaseController
{
    /**
     * ユーザ名、コメント、クラス名で検索するメソッド
     *
     * @author koki-sys, take65
     * @param Request $request
     *
     * @return Illuminate\Support\Collection $post
     */
    public function PostIndex(Request $request)
    {
        $post = null;

        if (!empty($request->input('keyword'))) {
            // キーワード検索処理
            $pat = '%' . addcslashes($request->input('keyword'), '%_\\') . '%';
            $post = DB::table('posts')
                ->join('users', 'users.id', '=', 'posts.user_id')
                ->orWhere('comment', 'LIKE', $pat)
                ->orWhere('class', 'LIKE', $pat)
                ->orWhere('users.name', 'LIKE', $pat)
                ->get();
        }
        if(!empty($request->input('checkbox'))){
            //使用言語処理
            $check = new Form($request->input('checkbox'));
            //文字列変換
            $checkbox = '';
            if(isset($request->checkbox)){
                $checkbox = implode("\n",$request->checkbox);
            }
            $post2 = DB::table('posts')
            ->where('use_language','LIKE',$checkbox)
            ->get();
        }
        return view('PostIndex',compact('$post','$post2'));
    }
}