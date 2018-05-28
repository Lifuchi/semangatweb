<?php

namespace App\Http\Controllers;

use App\Userini;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
        	'nama'=>'required',
        	'email'=>'required',
            'username'=>'required',  
            'password'=>'required|confirmed'
            'alamat'=>'required',
            'telepon'=>'required',
            'kota'=>'required',
            'provinsi'=>'required'
        ]);

        $user= User::create([
        	'nama'=>request('nama'),
        	'email'=>request('email'),
            'username'=>request('username'),
            'password'=>bcrypt(request('password')),
            'alamat'=>request('alamat'),
            'telepon'=>request('telepon'),
            'kota'=>request('kota'),
            'provinsi'=>request('provinsi')
        ]);

        auth()->login($user);
        
        return redirect('/Cleaner');
    }

}
