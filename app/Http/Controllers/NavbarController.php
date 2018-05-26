<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function Cleaner(){
    	return view('pkjcleaner');
    }
    public function  Technician(){
    	return view('pkjtech');
    }
    public function CaraKerja(){
    	return view('carakerja');
    }
}