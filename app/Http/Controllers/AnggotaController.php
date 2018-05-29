<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Anggota;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index($id){
		
    	echo (int)$id;
    	$anggota = DB::table('anggota')->select(DB::raw('*'))->where('id_anggota', '=', '$id')->get();
    	echo $anggota;
    	return view('anggota', ['anggota' => $anggota]);
	}
}
