<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function dashboard(){
        // return "welcome dashboard page";
        return view('dashboard');
    }
}
