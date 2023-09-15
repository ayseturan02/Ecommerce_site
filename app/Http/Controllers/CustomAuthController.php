<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login(){
       return view("auth.login");
    }
    public function register(){
        return view("auth.register");
    }
}
