<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(User $author)
    {
        return view('posts', [
            'title' => 'Posts By ' . $author->name,
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }
}
