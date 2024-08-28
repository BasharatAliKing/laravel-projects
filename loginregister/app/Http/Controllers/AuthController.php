<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class AuthController extends Controller
{
    public function register_view(){
        return view('auth.register');
    }
    public function register(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:6',
        ]);
       User::create([
          'name'=>$req->name,
          'email'=>$req->email,
          'password'=>\Hash::make($req->password),
       ]);
       if(\Auth::attempt($req->only('email','password'))){
        return redirect('home');
       }else{
        return redirect('register')->withError('Error');
       }
    }
    public function login_view(){
        return view('auth.login');
    }
    public function login(Request $req){

       $credentials = $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(\Auth::attempt($req->only('email','password'))){
            return redirect('home');
           }
            return redirect('login')->withError('LogIn details are not Valid!');     
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
    public function home(){
        return view('home'); 
    }
}
