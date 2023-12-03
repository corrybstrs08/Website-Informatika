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
        Schema::create('kompetisi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->date('tanggal');  
            $table->string('penyelenggara', 100);
            $table->text('keterangan');
            $table->string('gambar');
            $table->string('link',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompetisi');
    }
};
