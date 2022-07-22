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
        // 三項演算子
        $keyword = (!empty($request->input('keyword'))) ?
            '%' . addcslashes($request->input('keyword'), '%_\\') . '%' : null;
        $langArray = (!empty($request->input('language'))) ?
            $request->input('language') : null;

        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->when($keyword, function ($query) use ($keyword) {
                // キーワード検索
                return $query->orWhere('comment', 'LIKE', $keyword)
                    ->orWhere('class', 'LIKE', $keyword)
                    ->orWhere('users.name', 'LIKE', $keyword);
            })->when($langArray, function ($query) use ($langArray) {
                // 言語の処理
                foreach ($langArray as $lang) {
                    $langFormat = '%' . addcslashes($lang, '%_\\') . '%';
                    $query = $query->where('use_language', 'LIKE', $langFormat);
                }
                return $query;
            })->get();

        return view('welcome', compact('posts'));
    }
}
