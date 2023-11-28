<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\M_post;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Halaman Posts",
            "active" => 'posts',
            'posts' => Post::latest()->get(),
            // "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post,
        ]);
    }
}
