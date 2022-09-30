<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class profileeditController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $class = $request->input('class');

        //ひとまず固定idのuser情報を変更
        $id = 1;
        $users = User::find($id);
        $users->name = $request->name;
        $users->class = $request->class;
        $users->save();

        return redirect('/profile');

    }
}
