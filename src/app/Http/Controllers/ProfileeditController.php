<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileeditController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $class = $request->input('class');
        $email = $request->input('email');
        $flag = $request->input('mail_flag');
        // dd($flag);

        //ひとまず固定idのuser情報を変更
        $id = Auth::id();
        $users = User::find($id);
        $users->name = $request->name;
        $users->class = $request->class;
        $users->email = $request->email;
        $users->email_public_flg = $flag;
        $users->save();

        return redirect('/profile');
    }

    public function edit(Request $request)
    {
        $langs = Language::all();
        $user = User::find(Auth::id());

        return view('profile_edit', compact('langs', 'user'));
    }
}
