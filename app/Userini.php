<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userini extends Model
{
    protected $table = 'user_mjk';
    protected $fillable = [
        'name', 'email', 'username', 'password', 'alamat', 'telepon', 'kota', 'provinsi',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transaksi(){
    	return $this->hasMany('Transaksi');
    }
}
