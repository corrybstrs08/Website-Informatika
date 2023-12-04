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
                'gambar'=> "Benhard Yudha_Ketua.jpg",
                'jabatan' => "Ketua"
            ],
            [
                'nama'=>"Baha Ambrosius Sibarani",
                'gambar'=> "Baha Ambrosius Sibarani _Wakil Himasti .jpg",
                'jabatan' => " Wakil Ketua"
            ],
            [
                'nama'=>"Angelika Ruth",
                'gambar'=> "angelika.jpg",
                'jabatan' => "Sekretaris"
            ],
            [
                'nama'=>"Nadia Gracia Sirait",
                'gambar'=> "Nadia Gracia_Wakil Sekretaris.jpg",
                'jabatan' => "Wakil Sekretaris"
            ],
            [
                'nama'=>"Ella Tasya Silaban",
                'gambar'=> "Ella Silaban.jpg",
                'jabatan' => "Bendahara"
            ],
            [
                'nama'=>"Olga Prischilla",
                'gambar'=> "Olga Frischila G_Wakil Bendahara.jpg",
                'jabatan' => "Wakil Bendahara"
            ],
        ]);
    }
}
