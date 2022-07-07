<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(request(['username', 'password']))) {
            return redirect('/home');
        }
        return back()->withErrors([
            'message' => 'The username or password is incorrect.',
        ]);
    }
}
