<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $fillable = [
        'nama_lengkap', 'tempat_lahir', 'jenis_kelamin', 'email', 'telepon', 'alamat', 'harga', 'waktu', 'cv',
    ];
}
