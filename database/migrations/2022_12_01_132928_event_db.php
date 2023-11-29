<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');  
            $table->string('deskripsi_singkat');
            $table->string('jenis'); 
            $table->string('lokasi');
            $table->string('penyelenggara');
            $table->string('kontak');
            $table->text('deskripsi');
            $table->text('penjelasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
