<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');

    }

    public function logout(Request $request){
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home')->with('message','You have been logged Out');
    }

    public function authenticate(Request $request){

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/admin')->with('message','You are logged in');
        }

       return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
