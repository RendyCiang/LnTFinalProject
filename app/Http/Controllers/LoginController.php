<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function aunthenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'ends_with:@gmail.com'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/catalog');
        }

        return back()->with('loginError', 'loginfailed');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/catalog'); 
    }

}
