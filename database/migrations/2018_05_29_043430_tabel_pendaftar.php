<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pendaftar', function (Blueprint $table) {
            $table->increments('id_daftar');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->string('email');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('divisi');
            $table->integer('harga');
            $table->time('waktu');
            $table->binary('cv');
            $table->rememberToken();
            $table->timestamps();
        });

         // DB::statement("ALTER TABLE pendaftar ADD cv MEDIUMBLOB");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
