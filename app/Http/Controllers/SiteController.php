<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\PostsController;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('home', [
            'posts' => Post::simplePaginate(10)
        ]);
    }
    public function about() {
        return view('about');
    }




    // This is old lol
    // public function show($id) {
    //     return view('posts.show', [
    //         'post' => Post::show($id)
    //     ]);
    // }

    // public function show(Post $post)
    // {
    //     return view('posts.show', [
    //         'post' => $post
    //     ]);
    // }


}
