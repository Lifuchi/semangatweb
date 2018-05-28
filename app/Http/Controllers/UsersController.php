<?php

namespace App\Http\Controllers;

use App\Userini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    public function index(){
        if(!Session::get('logini')){
            return redirect('logini')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('pkjcleaner');
        }
    }
    public function login(){
        return view('viewlogin');
    }
    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = Userini::where('username',$username)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('username',$data->username);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('logini')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('logini')->with('alert','Password atau Email, Salahaa!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('logini')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('viewregister');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'username'=>'required',  
            'password'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
            'kota'=>'required',
            'provinsi'=>'required',
        ]);
        $data =  new Userini();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->kota = $request->kota;
        $data->provinsi = $request->provinsi;
        $data->save();
        return redirect('logini')->with('alert-success','Kamu berhasil Register');
    }

    // public function create()
    // {
    //     return view('register');
    // }

    // public function store(Request $request)
    // {
    //     $this->validate(request(),[
    //     	'nama'=>'required',
    //     	'email'=>'required',
    //         'username'=>'required',  
    //         'password'=>'required|confirmed'
    //         'alamat'=>'required',
    //         'telepon'=>'required',
    //         'kota'=>'required',
    //         'provinsi'=>'required'
    //     ]);

    //     $user= User::create([
    //     	'nama'=>request('nama'),
    //     	'email'=>request('email'),
    //         'username'=>request('username'),
    //         'password'=>bcrypt(request('password')),
    //         'alamat'=>request('alamat'),
    //         'telepon'=>request('telepon'),
    //         'kota'=>request('kota'),
    //         'provinsi'=>request('provinsi')
    //     ]);

    //     auth()->login($user);
        
        // return redirect('/');

}
