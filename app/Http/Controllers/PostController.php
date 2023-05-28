<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => M_post::all(),
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => M_post::find($slug),
        ]);
    }
}
