<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    public function transaksi(){
    	return $this->hasMany('Transaksi');
    }
    public function cleaner(){
    	return $this->belongsTo('Cleaner');
    }
    public function teknisi(){
    	return $this->belongsTo('Teknisi');
    }
}
