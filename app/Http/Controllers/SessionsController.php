<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use auth;


class SessionsController extends Controller
{
    public function create(){
    	return view('layouts.login');
    }

    public function store(request $request){
    	$this->validate(request(),[
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	if(! auth()->attempt(request(['username','password'])) ){
    		return back()->withErrors([
    			'messages'=>'Periksa lagi data anda'
    		]);
    	}

    	return redirect('/');
    }

    public function destroy(){
    	auth()->logout();

    	return redirect('/');
    }
}
