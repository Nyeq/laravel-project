<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showRegister() {
      
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('authentication.register');
    }
    
    function register(Request $request) {
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email|max:100|unique:users',
            'password'=>'required|min:5|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        return redirect()->route('login.form')
                         ->with('success', 'Registration successful');
    }

    function showLogin() {
      
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('authentication.login');
    }
 
    function login(Request $request) {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

           
            return redirect()->route('resume');
        }

        return back()->withErrors([
            'email'=> 'Invalid email/password'
        ]);
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

     
        return redirect()->route('home');
    }
}
