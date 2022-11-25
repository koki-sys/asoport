<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FormControoler extends Controller
{
    function confirm(Request $request){
        $input = $request->session()->get("form_input");

        if(!$input){
            return redirect()->action("");
        }
        return view("create_confirm",["input"=>$input]);
    }
}