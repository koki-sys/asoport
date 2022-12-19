<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Language;

class TopController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')
            ->select('users.name', 'users.class', 'posts.*')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->where('posts.public_flg','1')
            ->get();

        $langs = Language::all();

        return view('welcome', compact('posts', 'langs'));
    }

}
