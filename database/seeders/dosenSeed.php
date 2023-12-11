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
                'nama' => "Arie Satia Dharma, S.T, M.Kom.",
                'deskripsi' => "",
                'gambar' => "Arie.jpg",
            ],
            [
                'nama' => "Dr. Arlinta Christy Barus, ST., M.InfoTech.",
                'deskripsi' => "",
                'gambar' => "Arlinta.png",
            ],
            [
                'nama' => "Dr. Inggriani Liem",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Dr. Johannes Harungguan Sianipar, S.T., M.T.",
                'deskripsi' => "",
                'gambar' => "Johannes.jpg",
            ],
            [
                'nama' => "Herimanto, S.Kom., M.Kom",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Iustisia Natalia Simbolon, S.Kom., M.T.",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Nenni Mona Aruan, S.Pd., M.Si",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Prof.Dr. Roberd Saragih, MT",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Rusyadi, PAI., M.Pd.",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Tahan HJ Sihombing, S.Pd., M. App Ling",
                'deskripsi' => "",
                'gambar' => "t.png",
            ],
            [
                'nama' => "Anthon Roberto Tampubolon, S.Kom, M.T.",
                'deskripsi' => "",
                'gambar' => "Anton.jpg",
            ],
            [
                'nama' => "Lit Malem Ginting, S.Si, MT",
                'deskripsi' => "",
                'gambar' => "LitMalem.jpg",
            ],
            [
                'nama' => "Yaya Setiadi, S.Si., MT",
                'deskripsi' => "",
                'gambar' => "Yaya.jpg",
            ],
        ]);
    }
}
