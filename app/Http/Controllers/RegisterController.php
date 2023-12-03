<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd('registrasi berhasil!!!');
        User::create($validatedData);

        //  $request->session()->flash('success', 'Registration successfull! Please login');
        // $request->session()->flash->with('success', 'Registration successfull! Please login');

        // session()->flash('success', 'Registration successfull! Please login');
        // $this->$request->session()->flash('success', 'Registration successfull! Please login');

        // return redirect('/login');
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
