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
        $posts = Post::all();

        return view('top',compact('posts'));
    }

    
}
