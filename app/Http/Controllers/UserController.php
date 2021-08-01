<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;
use Reminder;
use Sentinel;
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
        $user= User::where('Email',$req->Email)->first();
        if(!$user || !hash::check($req->Password,$user->Password)){
            return ["Error"=>"Email or Password is incorrect"]; 
        }
        return $user->Name;
    }
    function forget(){
        
    }
}
