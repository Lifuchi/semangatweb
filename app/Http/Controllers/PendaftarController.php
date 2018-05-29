<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;
use App\Userini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use auth;


class PendaftarController extends Controller
{
	public function daftar(){
    	return view('viewdaftar');
    }

    public function store(Request $request)
    {
    	 $this->validate($request, [
            'nama_lengkap'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required|date|date_format:Y-m-d',
            'email'=>'required|email',
            'telepon'=>'required',
            'alamat'=>'required',
            'divisi' => 'required',
            'harga'=>'required',
            'waktu'=>'required|date_format:H:i',
            'cv'=>'required|mimes:pdf|max:500000',
        ]);
        $dft = new Pendaftar();
        $dft->nama_lengkap = $request->nama_lengkap;
        $dft->jenis_kelamin = $request->jenis_kelamin;
        $dft->tempat_lahir = $request->tempat_lahir;
        $dft->tanggal_lahir = $request->tanggal_lahir;
        $dft->email = $request->email;
        $dft->telepon = $request->telepon;
        $dft->alamat = $request->alamat;
        $dft->divisi = $request->divisi;
        $dft->harga = $request->harga;
        $dft->waktu = $request->waktu;
        $dft->cv = $request->cv;
        $dft->save();
        return redirect('/')->with('alert-success','Anda berhasil Daftar');
    }
}
