<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public function user(){
    	return $this->belongsTo('Userini');
    }
    public function anggota(){
    	return $this->belongsTo('Anggota');
    }
}
