<?php

namespace App\Http\Controllers\AuthLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('pages.backend.login.login');
    }
    public function login_store(){
        return view('welcome');
    }



    public function register(){
        return view('pages.backend.login.register');
    }
}
