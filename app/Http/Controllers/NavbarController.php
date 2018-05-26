<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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