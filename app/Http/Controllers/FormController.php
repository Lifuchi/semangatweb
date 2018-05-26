<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function daftar(){
    	return view('daftar');
    }
}