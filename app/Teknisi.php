<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    protected $table = 'teknisi';

    public function anggota(){
    	return $this->hasOne('App\Anggota');
    }
}
