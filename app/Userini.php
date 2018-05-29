<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Userini extends Authenticatable
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

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }
}
