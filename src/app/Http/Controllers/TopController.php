<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class TopController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $posts = Post::select('users.name', 'users.class', 'posts.*')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->get();

        return view('welcome', compact('posts'));
    }
}
