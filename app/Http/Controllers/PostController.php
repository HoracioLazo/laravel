<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function single(){
        $posts = Post::where('status', '1')->orderBy('id','desc')->take(9)->get();
        return view('pages.single_page', compact('posts'));

    }

    public function asaide(){
        $posteas = Post::where('status', '1')->orderBy('id','desc')->take(4)->get();
        return view('pages.single_page', compact('posteas'));


    }



}
