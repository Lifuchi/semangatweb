<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use auth;


class FormController extends Controller
{
    public function register(){
    	return view('register');
    }
}