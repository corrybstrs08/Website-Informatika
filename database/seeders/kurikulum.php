<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kurikulum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kurikulum')->insert([
            [
                'kode' => 'KUS1102',
                'nama' => 'Pembentukan Karakter Del',
                'semester' => 1,
                'sks' => 2,
            ],
            [
                'kode' => 'MAS1101',
                'nama' => 'Matematika Dasar I',
                'semester' => 1,
                'sks' => 4,
            ],
            [
                'kode' => 'TIS1101',
                'nama' => 'Inovasi Digital',
                'semester' => 1,
                'sks' => 2,
            ],
            [
                'kode' => 'KUS1101',
                'nama' => 'Bahasa Inggris I',
                'semester' => 1,
                'sks' => 2,
            ],
            [
                'kode' => 'KUS1001',
                'nama' => 'Penulisan Karya Ilmiah',
                'semester' => 1,
                'sks' => 2,
            ],
            [
                'kode' => '10S1001',
                'nama' => 'Matematika Diskrit',
                'semester' => 1,
                'sks' => 3,
            ],
            [
                'kode' => 'FIS1102',
                'nama' => 'Fisika Dasar IB',
                'semester' => 1,
                'sks' => 3,
            ],
            [
                'kode' => 'MAS1201',
                'nama' => 'Matematika Dasar II',
                'semester' => 2,
                'sks' => 4,
            ],
            [
                'kode' => 'KUS1201',
                'nama' => 'Bahasa Inggris II',
                'semester' => 2,
                'sks' => 2,
            ],
            [
                'kode' => 'KUS1202',
                'nama' => 'Pengantar Rekayasa dan Desain',
                'semester' => 2,
                'sks' => 2,
            ],
            [
                'kode' => 'FIS1202',
                'nama' => 'Fisika Dasar IIB',
                'semester' => 2,
                'sks' => 3,
            ],
            [
                'kode' => '11S1213',
                'nama' => 'Rekayasa Perangkat Lunak',
                'semester' => 2,
                'sks' => 3,
            ],
            [
                'kode' => '10S1201',
                'nama' => 'Dasar Pemograman',
                'semester' => 2,
                'sks' => 4,
            ],
            [
                'kode' => 'KUS3002',
                'nama' => '	Agama dan Etika',
                'semester' => 3,
                'sks' => 2,
            ],
            [
                'kode' => 'MAS2001',
                'nama' => 'Probabilitas dan Statistika',
                'semester' => 3,
                'sks' => 3,
            ],
            [
                'kode' => '12S2102',
                'nama' => 'Basis Data',
                'semester' => 3,
                'sks' => 4,
            ],
            [
                'kode' => '11S2110',
                'nama' => 'Pemrograman Berorientasi Objek',
                'semester' => 3,
                'sks' => 4,
            ],
            [
                'kode' => '14S2106',
                'nama' => 'Sistem Digital',
                'semester' => 3,
                'sks' => 3,
            ],
            [
                'kode' => '10S2001',
                'nama' => 'Arsitektur dan Organisasi Komputer',
                'semester' => 3,
                'sks' => 3,
            ],
            [
                'kode' => '10S2201',
                'nama' => 'Aljabar Linier',
                'semester' => 4,
                'sks' => 3,
            ],
            [
                'kode' => '10S2202',
                'nama' => 'Jaringan Komputer',
                'semester' => 4,
                'sks' => 3,
            ],
            [
                'kode' => '10S2203',
                'nama' => 'Sistem Operasi',
                'semester' => 4,
                'sks' => 3,
            ],
            [
                'kode' => '10S2102',
                'nama' => 'Algoritma dan Struktur Data',
                'semester' => 4,
                'sks' => 4,
            ],
            [
                'kode' => '11S2206',
                'nama' => 'Logika Informatika',
                'semester' => 4,
                'sks' => 3,
            ],
            [
                'kode' => '11S2203',
                'nama' => 'Interaksi Manusia Komputer',
                'semester' => 4,
                'sks' => 3,
            ],
            [
                'kode' => '11S3109',
                'nama' => 'Pengembangan Aplikasi Berbasis Web',
                'semester' => 5,
                'sks' => 4,
            ],
            [
                'kode' => '11S3101',
                'nama' => 'Analisis dan Perancangan Perangkat Lunak',
                'semester' => 5,
                'sks' => 3,
            ],
            [
                'kode' => '10S3109',
                'nama' => 'Kecerdasan Buatan',
                'semester' => 5,
                'sks' => 3,
            ],
            [
                'kode' => '11S3116',
                'nama' => '	Teori Bahasa Formal dan Automata',
                'semester' => 5,
                'sks' => 3,
            ],
            [
                'kode' => '11S3112',
                'nama' => '	Pengujian dan Penjaminan Mutu Perangkat Lunak',
                'semester' => 5,
                'sks' => 3,
            ],
            [
                'kode' => '11S3105',
                'nama' => 'Kriptografi dan Keamanan Informasi',
                'semester' => 5,
                'sks' => 3,
            ],
            [
                'kode' => 'KUS2001',
                'nama' => '	Bahasa Inggris III',
                'semester' => 6,
                'sks' => 2,
            ],
            [
                'kode' => '11S3204',
                'nama' => 'Keamanan Perangkat Lunak',
                'semester' => 6,
                'sks' => 3,
            ],
            [
                'kode' => '11S3211',
                'nama' => '	Pengembangan Aplikasi Mobile',
                'semester' => 6,
                'sks' => 4,
            ],
            [
                'kode' => '11S3207',
                'nama' => 'Pembelajaran Mesin',
                'semester' => 6,
                'sks' => 3,
            ],
            [
                'kode' => '11S3208',
                'nama' => 'Manajemen Proyek Perangkat Lunak',
                'semester' => 6,
                'sks' => 4,
            ],
            [
                'kode' => '13S3215',
                'nama' => 'Sistem Paralel dan Terdistribusi',
                'semester' => 6,
                'sks' => 3,
            ],
            [
                'kode' => '11S4190',
                'nama' => '	Kerja Praktik',
                'semester' => 7,
                'sks' => 3,
            ],
            [
                'kode' => '11S4093',
                'nama' => '	Tugas Akhir 1',
                'semester' => 7,
                'sks' => 4,
            ],
            [
                'kode' => '11S4028',
                'nama' => '	Rekayasa Perangkat Lunak Berbasis Komponen',
                'semester' => 7,
                'sks' => 3,
            ],
            [
                'kode' => '11S4031',
                'nama' => 'Ethical Hacking and Penetration Testing',
                'semester' => 7,
                'sks' => 3,
            ],
            [
                'kode' => '11S4037',
                'nama' => 'Pemrosesan Bahasa Alami',
                'semester' => 7,
                'sks' => 3,
            ],
            [
                'kode' => '11S4026',
                'nama' => 'Pengembangan Aplikasi Platform Khusus',
                'semester' => 7,
                'sks' => 3,
            ],
            [
                'kode' => '12S4056',
                'nama' => 'Visualisasi Data',
                'semester' => 7,
                'sks' => 3,
            ],
            [
                'kode' => 'KUS4101',
                'nama' => 'Pancasila dan Kewarganegaraan',
                'semester' => 8,
                'sks' => 2,
            ],
            [
                'kode' => 'TIS3001',
                'nama' => '	Keteknowiraan',
                'semester' => 8,
                'sks' => 3,
            ],
            [
                'kode' => 'KUS3001',
                'nama' => 'Analisis Dampak Lingkungan',
                'semester' => 8,
                'sks' => 2,
            ],
            [
                'kode' => '11S4095',
                'nama' => '	Kapita Selekta',
                'semester' => 8,
                'sks' => 1,
            ],
            [
                'kode' => '11S4030',
                'nama' => 'UI/UX Design',
                'semester' => 8,
                'sks' => 3,
            ],
            [
                'kode' => '11S4025',
                'nama' => 'Pembangunan Aplikasi Berbasis Service',
                'semester' => 8,
                'sks' => 3,
            ],
            [
                'kode' => '31S4201',
                'nama' => 'Etika Keprofesian',
                'semester' => 8,
                'sks' => 2,
            ],
            [
                'kode' => '12S4005',
                'nama' => 'Hukum dan Etika Siber',
                'semester' => 8,
                'sks' => 2,
            ],
            [
                'kode' => '11S4032',
                'nama' => 'Information Security Governance and Risk Manajemen',
                'semester' => 8,
                'sks' => 3,
            ],
            [
                'kode' => '11S4035',
                'nama' => '	Interpretasi dan Pengolahan Citra',
                'semester' => 8,
                'sks' => 	3,
            ],
            [
                'kode' => '13S4033',
                'nama' => 'Keamanan Jaringan',
                'semester' => 8,
                'sks' => 3,
            ],
            [
                'kode' => '11S4036',
                'nama' => 'Pembelajaran Mesin Lanjut',
                'semester' => 8,
                'sks' => 3,
            ],            
        ]);
    }
}
