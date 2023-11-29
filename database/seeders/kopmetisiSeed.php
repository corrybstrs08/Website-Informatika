<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class kopmetisiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kompetisi')->insert([
            [
                'nama' => 'International Design Challenge 2022',
                'tanggal' => '2022-08-31 00:00:00',
                'penyelenggara' => 'Binus University',
                'keterangan' => 'Lomba Design internasional yang diadakan oleh binus',
                'gambar' => 'k1.jpg',
                'link' => 'https://sis.binus.ac.id/idc',
            ],
            [
                'nama' => 'INTERNATIONAL ENTREPRENEUR VIEW 2022',
                'tanggal' => '2022-08-21 00:00:00',
                'penyelenggara' => 'Universitas indonesia',
                'keterangan' => 'Kompetisi Business Plan',
                'gambar' => '2.jpg',
                'link' => 'https://drive.google.com/file/d/1wHq78V4b_7axgbV3fpKi1ZTO9oPKCn-I/view?usp=sharing',
            ],
            [
                'nama' => 'Management Startup Challenge (MSC)',
                'tanggal' => '2022-09-18 00:00:00',
                'penyelenggara' => 'Universitas Airlangga',
                'keterangan' => 'Kompetisi Business Plan',
                'gambar' => '3.jpg',
                'link' => 'https://mexpounair.com/wp-content/uploads/2022/07/booklet-penyisihan-msc-2022.pdf',
            ],
            [
                'nama' => 'IDEANATION X KSBN 2022',
                'tanggal' => '2022-08-31 00:00:00',
                'penyelenggara' => 'Institut Pertanian Bandung',
                'keterangan' => 'Kompetisi Business Case',
                'gambar' => '4.jpg',
                'link' => 'https://drive.google.com/drive/folders/1hH5dbClkrFrYFUSG8XwH0LMu5xmrR8M6',
            ],
            [
                'nama' => 'INVENTION 2022 UNIVERSITAS UDAYANA',
                'tanggal' => '2022-08-28 00:00:00',
                'penyelenggara' => 'Universitas Udayana',
                'keterangan' => 'Kompetisi Desain Web dan Poster',
                'gambar' => '5.jpg',
                'link' => 'http://invention-udayana.com/',
            ],
        ]);
    }
    
}
