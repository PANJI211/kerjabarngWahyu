<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
    
            if ($user->role === 'admin') {
                return redirect('/dashboard');
            } elseif ($user->role === 'user') {
                return redirect('/Home');
            }
        }
    
        return back()->with('failed', 'Email atau password salah');
    }

    // public function logout(){
    //     Auth::logout(Auth::user());
    //     return redirect('/login');
    // }

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('login');
    }
    
}