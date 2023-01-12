<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserDeleteController extends Controller
{
    public function userdelete(Request $request)
    {
        $user = User::find(auth::id());

        Post::where('user_id', $user->id)->delete();

        //ユーザ削除
        $user->delete();

        return redirect('/');
    }
}
