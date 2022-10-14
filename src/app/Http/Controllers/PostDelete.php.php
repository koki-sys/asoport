<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostDelete extends Controller
{

    public function postdelete (Request $request)
    {
        $id  =  $request->input('keyword');

        $post = Post::find($id);
        $post->delete();
        return view('####');
    }
}
