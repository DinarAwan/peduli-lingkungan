<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        return view('sesi/index');
    }
    public function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $infoLogin =[
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infoLogin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }
            return redirect('/');
        }else{
            return redirect('/sesi')->withErrors('Anda Tidak memiliki izin login');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
