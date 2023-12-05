<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
class ProsesLogin extends Controller
{
    public function index(){
        // return view('Login.index');
        if (Auth::check()) {
            return redirect('/dashboard/Admin');
        }else{
            return view('Login.index');
        }
    }
    public function logout(){
        Auth::logout();
    
        return redirect('/login');
    }
    public function Masuk(Request $request){
     
    
        if (Auth::Attempt($request->only('email','password'))) {
           
            return redirect()->intended('/dashboard/Admin')->with('loginberhasil', 'Berhasil Masuk, Selamat Datang Admin!');
        }else{
            return back()->with('loginError', 'Gagal Masuk, Coba Ulangi Kembali!');
    }
}
}