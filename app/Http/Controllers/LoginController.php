<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFE;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function login_proses(Request $request){
        $request -> validate([
            'email'     =>'required',
            'password'  =>'required'
        ]);
        $data = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
       
       if(Auth::attempt($data)){
            return redirect('/dashboard');
            // return redirect()->route('admin.dashboard');
       }else{
        return redirect()->route('login')->with('failed','email atau password salah');
       }
    }

    public function register(){
        
        return view('auth.register');
    }
    public function register_proses(Request $request){
           $request -> validate([
            'name' => 'required',
            'email' =>'required|email|unique:users,email',
            'password' =>'required|min:6'
           ]);

          $data['name'] = $request->name;
          $data['email'] = $request->email;
          $data['password'] =Hash::make($request->password);

          User::create($data);

          $login = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
       
       if(Auth::attempt($login)){
            return redirect()->route('dashboard');
            // return redirect()->route('admin.dashboard');
       }else{
        return redirect()->route('login')->with('failed','email atau password salah');
       }
    }

    public function logout(){
        Auth::logout();
       return redirect()->route('login')->with('success','kamu berhasil logout');
    }


    //LOGIN FRONTEND USER

    
}
