<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class RegisterController extends Controller
{
    //
    public function storeRegister(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required', 'min:3', 'max:40'],
            'email' => ['required', 'ends_with:@gmail.com'],
            'password' => ['required', 'min:6','max:12'],
            'Phone' => ['required', 'starts_with:08', 'min:9', 'max:12'],
            'admin_id' => ['required_if:role,admin']
        ]);

        $ProtectedPassword = bcrypt($request->password);
        
        $DataUser = [ 
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'Phone' => $request->Phone,
            'password' => $ProtectedPassword
        ];
        
        if($request->role == 'admin'){
            $DataUser['admin_id'] = $request->admin_id;
        }
        
        User::create($DataUser);    
        return view('login');
    }
}
