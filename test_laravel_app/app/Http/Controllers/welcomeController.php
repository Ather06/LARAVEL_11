<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    function sayHello(){
        return "Welcome laravel";
    }
    function course(){
        return "Laravel 11";
    }
}
