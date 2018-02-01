<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\post;

class PostController extends Controller
{
    public function index(){
        $posts = post::all();
        return view('post.index',compact('posts'));
    }
    //
}
