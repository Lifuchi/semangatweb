<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userini;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class NavbarController extends Controller
{
    public function Cleaner(){
    	$cleaner = DB::table('cleaner')
            ->join('anggota', 'anggota.id_anggota', '=', 'cleaner.id_anggota')
            ->get();
    	return view('pkjcleaner', ['cleaner' => $cleaner]);
    }
    public function  Technician(){
		$teknisi = DB::table('teknisi')
            ->join('anggota', 'anggota.id_anggota', '=', 'teknisi.id_anggota')
            ->get();
    	return view('pkjtech', ['teknisi' => $teknisi]);
    }
    public function CaraKerja(){
    	return view('carakerja');
    }
    public function ProfilPekerja($id){
    	(int)$idd = (int)$id;
    	//echo $idd;
    	//echo gettype($idd);

    	$first =  DB::table('anggota')
    				->rightJoin('cleaner', 'anggota.id_anggota', '=', 'cleaner.id_anggota')
    				->where('anggota.id_anggota', $idd);

    	$anggota = DB::table('anggota')
    				->rightJoin('teknisi', 'anggota.id_anggota', '=', 'teknisi.id_anggota')
    				->union($first)
    				->where('anggota.id_anggota', $idd)->get();

    	//echo $anggota;
    	return view('pkjprofil', ['anggota' => $anggota]);
    }
}