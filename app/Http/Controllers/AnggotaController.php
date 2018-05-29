<?php

namespace App\Http\Controllers;
use App\Userini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use auth;

use Illuminate\Http\Request;
//use App\Anggota;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index($id){
		
    	echo $id;
    	$anggota = DB::table('anggota')->where('id_anggota', '$id')->get();
    	//echo $anggota;
    	return view('anggota', ['anggota' => $anggota]);
	}
}
