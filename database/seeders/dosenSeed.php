<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class dosenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            [
                'nama'=>"Arie Satia Dharma, S.T, M.Kom.",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Dr. Arlinta Christy Barus, ST., M.InfoTech.",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Dr. Inggriani Liem",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Dr. Johannes Harungguan Sianipar, S.T., M.T.",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Herimanto, S.Kom., M.Kom",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Iustisia Natalia Simbolon, S.Kom., M.T.",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Nenni Mona Aruan, S.Pd., M.Si",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Prof.Dr. Roberd Saragih, MT",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Rusyadi, PAI., M.Pd.",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Tahan HJ Sihombing, S.Pd., M. App Ling",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Anthon Roberto Tampubolon, S.Kom, M.T.",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Lit Malem Ginting, S.Si, MT",
                'gambar'=> "t.png",
            ],
            [
                'nama'=>"Yaya Setiadi, S.Si., MT",
                'gambar'=> "t.png",
            ],
        ]);
    }
}
