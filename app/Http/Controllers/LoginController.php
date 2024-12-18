<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if($request->remember){
            setcookie('email', $credential['email'], time() + 3600);
            setcookie('password', $credential['password'], time() + 3600);
        }else{
            setcookie('email', '');
            setcookie('password', '');
        }


        if (Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect('/admin/dashboard');
        }
        return back()->with('danger', 'Login Failed!');  
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
