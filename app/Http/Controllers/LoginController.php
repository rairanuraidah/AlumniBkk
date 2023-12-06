<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function loginalumni(){
        return view('alumni.login_alumni');
    }

    function authenticating(Request $request){
        $request->validate([
            'nis' => ['required'],
            'password' => ['required'],
        ]);
        //  $credentials = $request->only('nis','password');
        // 
        $credentials = $request->only('nis','password');
        //  dd($credentials);
         if(Auth::guard('alumni')->attempt($credentials)){
            // $request->session()->regenerate(
                
                return redirect()->intended('dashboard');
            // );
         }
         session()->flash('error', 'login gagal, Periksa kembali username dan password Anda!');
         return redirect()->back();
        }
}
