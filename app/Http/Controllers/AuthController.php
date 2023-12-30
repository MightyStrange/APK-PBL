<?php

// File: app/Http/Controllers/Auth/LoginController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function Login()
    {
        return view('login');
    }

    public function register()
    {
       
            return view('register');
        }
    public function authtenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required',],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
           if(Auth::user()->role !='Admin'){
                session::flash('status','failed');
                Session::flash('message','akun anda belum terdaftar pada web kami.silahkan daftar atau hubungi admin');
                return redirect('/login');
           }
        }
        session::flash('status','failed');
        Session::flash('message','login gagal');
        return redirect('/login');
       
        
    }

        
  
}
