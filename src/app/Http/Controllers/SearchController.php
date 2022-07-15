<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Post;

class SearchController extends BaseController
{
    public function PostIndex()
    {
        /*
        $articles = Post::orderBy('created_at','asc')->where(function($query){
            $keyword = Request::input('keyword');
            $language = Request::input('language');
            if($search){
                foreach($search as $value){
                    $query->where('class','like','%'.$value.'%')->orwhere('comment','like','%'.$value.'%')
                    ->where(function($a,$language){
                        $a->where('use_language','like','%'.$language.'%');
                    });
                };
                $users=$query;
            }
            // return view('',compact($users));
        });

        dd($articles);
        */
        $posts = Post::all();
        foreach ($posts as $post) {
            echo $post;
        }
    }
}
