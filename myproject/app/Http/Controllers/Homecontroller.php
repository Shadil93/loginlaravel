<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function register(){
        return view('register');
    }
    public function do_register(Request $request){
        $request->validate([
          'name'=>'required',
          'email'=>'required',
          'password'=>'required',
        ]);
        Employee::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>bcrypt($request->password),

        ]);
        return redirect()->route('register');
        
    }
    public function login(){
        return view('login');
    }
    public function do_login(Request $request){
        $credentials =$request->only('email','password');

 if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('dashborad');
        }

    }
    public function dashborad(){

        $dd= auth::user();
        return view('dashborad');
    }
}
