<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function register(Request $req){
        $user= new User;
        $user->Name=$req->input('Name');
        $user->Email=$req->input('Email');
        $user->Password=Hash::make($req->input('Password'));
        $user->save();
        return $user;
    }
    function login(Request $req){
        $user= User::where('email',$req->Email)->first();
        if(!$user|| !hash::check($req->Password,$user->password)){
            return ["Error"=>"Email or Password is incorrect"]; 
        }
        return $user;
    }
    function forget(){
        
    }
}
