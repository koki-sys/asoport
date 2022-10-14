<?php

namespace App\Http\Controllers;

use App\Language;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileIndex extends Controller
{
    /**
     * プロフィールの表示処理
     *
     * @author koki-sys
     *
     * @param $reqeust
     * @param $response
     */
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = User::find(Auth::id());

            $posts = Post::where('user_id', $user->id)->get();

            $langs = Language::all();

            return view('profile', compact('user', 'posts', 'langs'));
        }

        return redirect('/login');
    }

}
