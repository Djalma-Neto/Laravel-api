<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(){
        return view('Auth/Login');
    }

    public function loginDo(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->withErrors(['Credenciais inválidas']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
