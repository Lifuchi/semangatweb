<?php

namespace App\Http\Controllers;

use App\Userini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsersController extends Controller
{
        use AuthenticatesUsers;

    public function index(){
        if(!Session::get('loginx')){
            return redirect('loginx')->with('alert','Kamu harus login dulu');
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
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',

        ]);
        
        $username = $request->username;
        $password = $request->password;
  
           if (Auth::attempt(['username'=>$username,'password'=>$password])){
                        // return 'AAAFailure';
                   Session::put('name',$username);
                   // dd(Session['name']);
                     // echo Session::get('name') ;
                 return redirect('/');                                  
                 
        }else{
                       // return 'Failure';
             return redirect('loginx')->with('alert','Password atau Username, Salah!');
                   }
        // $data = Userini::where('username',$username)->first();
        // if(count($data) > 0){ //apakah email tersebut ada atau tidak
        //     if(Hash::check($password,$data->password)){
        //         Session::put('name',$data->name);
        //         Session::put('username',$data->username);
        //         Session::put('login',TRUE);
        //         return redirect('/');
        //     }
        //     else{
        //         return redirect('logini')->with('alert','Password atau Username, Salah! (1)'.Hash::check($password,$data->password));
        //     }
        // }
        // else{
        //     return redirect('logini')->with('alert','Password atau Username, Salah! (2)');
        // }
    }
    public function logout(){
        Session::flush();
        Session()->flash('message' , 'bye');
        return redirect('loginx')->with('alert','Anda berhasil logout');
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
        $data->password = Hash::make($request->password);
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->kota = $request->kota;
        $data->provinsi = $request->provinsi;
        $data->save();
        return redirect('loginx')->with('alert-success','Kamu berhasil Register');
    }
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
