<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function login(){
    	return view('login');
    }
    public function register(){
    	return view('register');
    }
}
