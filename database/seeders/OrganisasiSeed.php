<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisasiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisasi')->insert([
            [
                'nama'=>"Benhard Yudha",
                'gambar'=> "t.png",
                'jabatan' => "Ketua"
            ],
            [
                'nama'=>"Baha Ambrosius Sibarani",
                'gambar'=> "t.png",
                'jabatan' => " Wakil Ketua"
            ],
            [
                'nama'=>"Angelika Ruth",
                'gambar'=> "t.png",
                'jabatan' => "Sekretaris"
            ],
            [
                'nama'=>"Nadia Gracia Sirait",
                'gambar'=> "t.png",
                'jabatan' => "Wakil Sekretaris"
            ],
            [
                'nama'=>"Ella Tasya Silaban",
                'gambar'=> "t.png",
                'jabatan' => "Bendahara"
            ],
            [
                'nama'=>"Olga Prischilla",
                'gambar'=> "t.png",
                'jabatan' => "Wakil Bendahara"
            ],
        ]);
    }
}
