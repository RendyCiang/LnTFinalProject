<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'ends_with:@gmail.com'],
            'password' => [
                'required', 
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
            ],
            'phone' => ['required', 'starts_with:08', 'min:9', 'max:12'],
            'Day_of_Birth' => ['required'],
            'address' => ['required']
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'Day_of_Birth' => $request->Day_of_Birth,
            'password' => $request->password
        ]);

        return view('home');
    }
}
