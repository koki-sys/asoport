<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDeleteController extends Controller
{
    //
    public function userdelete(Request $request)
    {
        $id = auth()->id();
        //ユーザ削除
        $user = User::find($id);
        $user->delete();
        //ユーザが投稿したデータ削除
        $post = Post::find($id);
        $post->delete();


        return redirect('/top');
    }

}
