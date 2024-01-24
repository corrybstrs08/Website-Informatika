<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class visiMisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('misi')->insert([

            [
                'misi'=> "Menyelenggarakan pendidikan teknik informatika yang bermutu, profesional dan diperhitungkan secara nasional.",
            ],
            [
                'misi'=> "Menyelenggarakan penelitian yang menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal.",
            ],
            [
                'misi'=> "Melakukan pengabdian kepada masyarakat dalam bidang teknik informatika.",
            ],
        ]);   
        DB::table('visi')->insert([
        	'visi'=>"Menjadi program Teknik Informatika yang unggul yang berperan dalam menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal bagi kemajuan bangsa pada tahun 2023.",
        ]);   
        DB::table('sejarah')->insert([
        	'sejarah'=>"<h3>Sejarah Program Studi S1-Informatika</h3><p>Program Studi S1 Teknik 
            Informatika merupakan salah satu dari 4 (empat) program studi di bawah <strong>Fakultas 
            Teknik Informatika dan Elektro</strong> di Institut Teknologi Del.&nbsp;</p><p>Prodi S1 
            Informatika ini di rancang sejak tahun 2013 dan beroperasi pada tahun 2014 bersama 
            dengan 2 prodi lainnya yaitu prodi S1 Teknik Elektro dan S1 Sistem Informasi. Ketiga 
            prodi ini tergabung dalam 1 fakultas yaitu <i>FITE (Fakultas Teknik Elektro dan 
            Informatika)</i>. Fakultas ini berdiri pada tahun 2013 seiring dengan perubahan 
            Politeknik Informatika Del (PI Del) menjadi Institut Teknologi Del (IT Del).</p><p>&nbsp;
            </p><h3>Cakupan Ilmu</h3><p>Program Studi S1 Informatika (PSIF) di Institut Teknologi 
            Del (IT Del) memiliki cakupan bidang ilmu (<i>body of knowledge</i>) meliputi area ilmu 
            komputer (<i>Computer Science</i>), rekayasa perangkat lunak (<>Software Engineering</
            i>), keamanan siber (<i>Cybersecurity</i>), dan ilmu data (<i>Data Science</i>). Lulusan 
            dari PSIF dipersiapkan untuk dapat memiliki kemampuan analisis persoalan yang terkait 
            bidang <i>computer science</i> dan pengembangan perangkat lunak mulai dari yang 
            sederhana yang sampai yang kompleks ataupun berskala besar. Selain itu, lulusan PSIF 
            juga dipersiapkan memiliki kemampuan untuk merancang dan mengimplementasikan keamanan 
            yang diperlukan pada suatu perangkat lunak. Dan, terakhir, seorang lulusan PSSTI 
            diproyeksikan untuk memiliki kemampuan mengembangkan perangkat lunak yang pintar 
            menggunakan sejumlah teknik kecerdasan buatan dan secara khusus memiliki kemampuan untuk 
            menjadi <i>artificial intelligence engineer</i>.</p>",
        ]);  
    }
}
