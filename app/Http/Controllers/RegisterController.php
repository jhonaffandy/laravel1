<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //index
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    //registering documentation 1
    // public function store()
    // {
    //     return request()->all();
    // }

    //registering documentation 2
    // public function store(Request $request)
    // {
    //     return $request->all();
    // }

    //registering documentation 3
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        dd('registrasi berhasil!!!');
    }
}
