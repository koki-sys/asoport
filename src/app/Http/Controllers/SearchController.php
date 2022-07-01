<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SerchController extends BaseController
{
    public function PostIndex()
    {   
        $articles = Post::orderBy('created_at','asc')->where(function($query){
            $search = Request::input('search');
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
            return view('',compact($users));
        });
    }   
}