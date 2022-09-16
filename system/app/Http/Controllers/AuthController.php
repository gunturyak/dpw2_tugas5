<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showLogin(){
        return view('login');
    }

    function LoginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('beranda')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silahkan cek Email dan Password anda');
        }
        
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

    function registration(){
        
    }

    function forgotPassword(){
        
    }
}