<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    protected $table = 'cleaner';

    public function anggota(){
    	return $this->hasOne('Anggota');
    }
}
