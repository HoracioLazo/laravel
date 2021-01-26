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

    public function sasaide(){
        $posteas = Post::where('status', '1')->orderBy('id','desc')->take(2)->get();
        return view('page.single_page', compact('posts'));

        // $posteas = Post::where('status', 1)->paginate(2);
        // return view('pages.single_page', compact('posts'));

    }



}
