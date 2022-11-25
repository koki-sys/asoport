<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostConfirmController extends Controller
{
    public function post(Request $request)
    {
        $port = $request->port;
        $git = $request->git;
        $comment = $request->comment;

        
        $language = "";
        if (!empty($request->lang)) {
                $language = implode(" / ", $request->lang);
        }
        //$langs = implode(" ",$lang);

        //$lang = $request->input('lang');

        $path = Storage::disk('s3')->putFile('asoport', $request->photo, 'public');
        $img_url = Storage::disk('s3')->url($path);

        $input_data = [
            'port' => $port,
            'git' => $git,
            'comment' => $comment
        ];


        return view('posts.create_confirm',compact('img_url','input_data','language'));
        //return view('posts.create_confirm',compact('img_url','input_data'));
    }

    
}