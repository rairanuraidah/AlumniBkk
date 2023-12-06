<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function authenticating(Request $request){
        $ira = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($ira)){
            if(Auth::user()->role_id == 1){
                return redirect('sidebar');
            }
            if(Auth::user()->role_id == 2){
                return redirect('profile');
            }
        }

        Session::flash('message', 'Login infalid');
        return redirect('/login');
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
