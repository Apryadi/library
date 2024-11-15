<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }

    function masuk(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],
        [
            'email.required'=>'email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('admin');
        }
        else
        {
            return redirect('')->withErrors('Email dan password yang di masukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
