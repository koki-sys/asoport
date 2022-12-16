<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostDeleteController extends Controller
{
    public function postdelete(Request $request)
    {
        $id = $request->input('id');

        $post = Post::find($id);
        $post->delete();

        return redirect('/profile');
    }
}
