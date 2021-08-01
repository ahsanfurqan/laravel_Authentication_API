<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ahsan;
class user extends Controller
{
    function list(){
        return ahsan::all();
    }
}
