<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class PostController extends Controller{
  public function post(Request $request){
    //↓test用
    $user_id = Auth::id();
    $posts = new Post;
    $html=$request->html;
    $css=$request->css;
    $php=$request->php;
    $js=$request->js;
    $java=$request->java;
    $lang=$html.$css.$php.$js.$java;
    
    // $posts->user_id = $request->user_id;
    //↓test用
    $posts->user_id = "1";
    $posts->class = $request->class;
    $posts->port_url = $request->port;
    $posts->git_url = $request->git;
    $posts->comment = $request->comment;
    $posts->use_language = $lang;
    $posts->img_url = $request->img;
    $posts->save();

    return redirect('/');
  }
}