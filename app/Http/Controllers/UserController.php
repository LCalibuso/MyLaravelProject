<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request){
        $reqdata = $request->validate([
            'firstname'=>'required',
            'lastname'=> 'required',
            'email'=> 'required|unique:users,email',
            'password'=>'required|min:8|max:24'
        ]);
        $reqdata['password']= bcrypt($reqdata['password']);
        $user= User::create($reqdata);
        auth()->login($user);
        return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');

    }

    public function login(Request $request){
        $reqdata = $request -> validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($reqdata)){
            session() -> regenerate();
            return redirect()->route('welcome');
        }
       
    }
}

