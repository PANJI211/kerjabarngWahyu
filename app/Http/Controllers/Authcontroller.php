<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login(Request $request ){
        $request -> validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);
        if(Auth::attempt($request-> only('email','password'),)){
            return redirect('/dashboard');
        }
        return back()->with('failed','email atau password salah');
    }
}
