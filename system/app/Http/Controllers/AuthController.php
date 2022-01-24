<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{

    function showlogin(){
        return view('login');
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Login berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
    }

    function logout(){
        Auth::logout();
		return redirect('login');
    }

    function register(){
        return view('register');
    }

    function forgot(){
        return view('forgot');
    }
}