<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\M_post;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest();

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->where('body', 'like', '%' . request('search') . '%');
        }
        // dd(request('search'));
        return view('posts', [
            "title" => "Halaman Posts",
            "active" => 'posts',
            'posts' => $posts->get(),
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
