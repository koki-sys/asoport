<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function post_public(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update(['public_flg' => 1]);
        return redirect('/profile');
    }

    public function post_unpublic(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update(['public_flg' => 0]);
        return redirect('/profile');
    }
}
