<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jumlahSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jumlah')->insert([
        	'mahasiswa'=>223,
            'staffdosen'=> 261,
            'publikasi'=>13,
        ]);        
    }
}   
