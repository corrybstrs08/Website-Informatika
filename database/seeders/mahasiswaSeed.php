<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswa')->insert([
            [
                'nim'=>"11S21042",
                'nama'=> "Pany Irene Matondang",
                'angkatan' => "2021",
                'status' => "Aktif",
            ],
            [
                'nim'=>"11S21042",
                'nama'=> "Pany Irene Matondang",
                'angkatan' => "2021",
                'status' => "Aktif",
            ],
            [
                'nim'=>"11S21042",
                'nama'=> "Pany Irene Matondang",
                'angkatan' => "2021",
                'status' => "Aktif",
            ],
            [
                'nim'=>"11S21042",
                'nama'=> "Pany Irene Matondang",
                'angkatan' => "2021",
                'status' => "Aktif",
            ],
            [
                'nim'=>"11S21042",
                'nama'=> "Pany Irene Matondang",
                'angkatan' => "2021",
                'status' => "Aktif",
            ],
            [
                'nim'=>"11S21042",
                'nama'=> "Pany Irene Matondang",
                'angkatan' => "2021",
                'status' => "Aktif",
            ]
        ]);
    }
}
