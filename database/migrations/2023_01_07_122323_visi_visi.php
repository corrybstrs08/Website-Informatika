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
        Schema::create('visi', function (Blueprint $table) {
            $table->text('visi');
        });
        Schema::create('sejarah', function (Blueprint $table) {
            $table->text('sejarah');
        });
        Schema::create('misi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('misi');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visi');
        Schema::dropIfExists('misi');
        Schema::dropIfExists('sejarah');
    }
};
