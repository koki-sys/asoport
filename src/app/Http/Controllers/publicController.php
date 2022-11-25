<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function post_Public (Request $request)
    {
        $id  =  $request->input('id');

        $post = Post::find($id);
        $post->update(['public_flg' => 1]);
        return view('####');
    }

    public function post_UnPublic (Request $request)
    {
        $id  =  $request->input('id');

        $post = Post::find($id);
        $post->update(['public_flg' => 0]);
        return view('####');
    }
}
