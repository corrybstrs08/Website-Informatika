<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'nama' => 'Pengukuhan anggota baru HIMASTI',
                'waktu_mulai' => '2022-10-12 00:00:00',
                'waktu_selesai' => '2022-10-12 00:00:00',
                'deskripsi_singkat' => 'Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI.',
                'jenis' => 'Program Kerja Tahunan HIMASTI',
                'lokasi' => 'Pantai Lumban Bul-Bul',
                'penyelenggara' => 'Kepengurusan HIMASTI',
                'kontak' => 'Reindhard (+6282367xxxxxx)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022. Dengan dresscode training pack Del. ',
                'penjelasan' => 'Pengukuhan mahasiswa angkatan 2022 sebagai anggota HIMASTI. Pengukuhan ini dilakukan sebagai bentuk dan simbol bahwa angakatan 2022 telah dikukuhkan dan disahkan menjadi bagian dari keluarga HIMASTI. Dengan adanya kegiatan ini, diharapkan mahasiswa dan mahasiswi baru dapat merasakan kehangatan dan solidaritas dari keluarga HIMASTI. Setelah menjadi bagian dari keluarga Himpunan Mahasiswa Sarjana Informatika, maka mahasiswa dan mahasiswi Himpunan Mahasiswa Sarjana Informatika secara sadar harus siap menerima dan bertanggung jawab terhadap aturan dan peraturan serta menjaga nama baik Himpunan.',
            ],
            [
                'nama' => 'Natal Himpunan Mahasiswa Informatika',
                'waktu_mulai' => '2022-10-12 00:00:00',
                'waktu_selesai' => '2022-10-12 00:00:00',
                'deskripsi_singkat' => 'Perayaan hari natal untuk semua anggota HIMASTI',
                'jenis' => 'Kegiatan Tahunan Program Studi',
                'lokasi' => 'Gereja HKBP Sitoluama',
                'penyelenggara' => 'Mahasiswa-mahasiswi S1 Informatika',
                'kontak' => 'Guntur (+6282367xxxxxx)',
                'deskripsi' => 'Seluruh mahasiwa dan mahasiswi S1 Informatika diharapkan berpartisipasi dan turut hadir dalam acara natal ini. Dengan dresscode berwarna hijau. ',
                'penjelasan' => 'Perayaan hari natal untuk seluruh anggota HIMASTI. Natal adalah sebuah perayaan yang di lakukan oleh semua umat Kristiani di seluruh dunia untuk menyambut sang Juru Selamat, yaitu Tuhan Yesus Kristus. Tidak perlu dengan perayaan yang besar dan mewah tetapi bagaimana kita benar-benar meresapi dan mengenang bagaimana kedatangan Tuhan Yesus Kristus datang ke dunia ini untuk menyelamatkan kita. Melalui perayaan Natal ini, yang diharapakan mahasiswa/i menjadi generasi muda intelektual yang selalu takut akan Tuhan.',
            ],
            [
                'nama' => 'Malam Keakraban Program Studi S1 Informatika',
                'waktu_mulai' => '2023-02-04 00:00:00',
                'waktu_selesai' => '2022-02-05 00:00:00',
                'deskripsi_singkat' => 'Acara ini bertujuan untuk mempererat tali persaudaraan antar mahasiswa/i informatika dari angkatan terkecil hingga yang terbesar.',
                'jenis' => 'Kegiatan Refreshing',
                'lokasi' => 'Lapangan Napitupulu',
                'penyelenggara' => 'Informatika angkatan 2019',
                'kontak' => ' 08218766xxxx (Judah)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2019, 2020, 2021, dan 2022.',
                'penjelasan' => 'Pada acara ini seluruh mahasiswa/i akan bermalam dengan menggunakan tenda. Setiap mahasiswa/i wajib membawa peralatan pribadi yang mungkin dibutuhkan selama acara. Untuk rangkaian kegiatan yang akan dilakukan, akan dibagikan melalui grup antar angkatan prodi S1 Informatika. Diharapkan seluruh mahasiswa/i Informatika angkatan 2019 hingga 2022 mengikuti kegiatan ini dengan baik dan tertib. Tiada kesan tanpa kehadiran rekan-rekan sekalian.',
            ],
            [
                'nama' => 'HIMASTI Coding Challenge (HCC)',
                'waktu_mulai' => '2023-03-10 00:00:00',
                'waktu_selesai' => '2023-03-15 00:00:00',
                'deskripsi_singkat' => ' Acara ini bertujuan untuk mengasah kemampuan pada mahasiswa/i di Institut Teknologi Del.',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'HIMASTI',
                'kontak' => '08137520xxxx (Guntur Sinaga)',
                'deskripsi' => 'Kegiatan ini diwajibkan untuk seluruh mahasiswa S1 Informatika angakatan 2020, 2021, dan 2022.',
                'penjelasan' => 'HIMASTI Coding Challenge adalah sebuah kompetisi yang diadakan oleh pengurus HIMASTI untuk menjelankan salah satu program kerja yang telah mereka rancang di awal pembentukan kepanitian HIMASTI.
                Program ini biasanya di adakan di Institut Teknologi Del dan diikuti oleh mahasiswa/i Institut Teknologi dari berbagai bidang program studi. Dan di rencanakan di tahun ini program ini di berlakukan untuk mahasiswa/i dari luar kampus Institut Teknologi Del.
                Tujuan dari HCC:
                A. Melatih kemampuan mahasiswa/I dan Siswa dalam menyelesaikan suatu masalah dengan menggunakan bahasa pemrograman.
                B. Melatih jiwa kompetitif mahasiswa/I dan Siswa agar mampu bersaing untuk kompetisi yang sama tingkat nasional hingga internasional.
                Menambah pengalaman dan pengetahuan mahasiswa/I dan Siswa yang berhubungan dengan pemrograman kompetitif
                ',
            ],
            [
                'nama' => 'HIMASTI PHOTOGRAPHY COMPETITION ',
                'waktu_mulai' => '2023-01-23 00:00:00',
                'waktu_selesai' => '2023-01-23 00:00:00',
                'deskripsi_singkat' => 'Melakukan event yang dimana seluruh rekan himasti akan mengikuti Kompetisi Fotografi yang mengenai seputar HIMASTI ',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => ' Pengurus HIMASTI Divisi Komunikasi dan Informasi',
                'kontak' => '08218766xxxx (Dian Jorgy)
                ',
                'deskripsi' => '',
                'penjelasan' => 'Himasti Photography Competition ini adalah suatu kegiatan kompetisi yang diselenggarakan oleh kepanitian Himasti untuk seluruh anggota Himasti dalam  hal mengabadikan momen-momen yang ada di Institut Teknologi Del yang sesuai dengan tema yang dibuat oleh penyelenggara.
                Program ini berguna untuk mengembangkan bakat mahasiswa/i Institut Teknologi Del di bidang photography.
                ',
            ],
            [
                'nama' => 'Webinar',
                'waktu_mulai' => '2023-03-20 00:00:00',
                'waktu_selesai' => '2023-03-20 00:00:00',
                'deskripsi_singkat' => 'Mengadakan diskusi dan sharing knowledge oleh alumni kepada seluruh anggota HIMASTI',
                'jenis' => 'Kegiatan Belajar',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Pendidikan',
                'kontak' => '08218766xxxx (Nanchy Siadari)',
                'deskripsi' => '',
                'penjelasan' => 'Kegiatan webinar ini di adakan guna untuk menambah ilmu setiap mahasiswa/i prodi S1 Informatika terkait ilmu di luar proses pembelajaran yang di sistemkan oleh kampus. Misalnya webinar yang diadakan oleh ikatan alumni untuk memberikan wawasan terkait dunia pekerjaan kepada mahasiswa/i prodi S1 Informatika.',
            ],
            [
                'nama' => 'KM Cup',
                'waktu_mulai' => '2023-01-20 00:00:00',
                'waktu_selesai' => '2023-01-20 00:00:00',
                'deskripsi_singkat' => 'Setiap anggota HIMASTI akan melakukan pertandingan olahraga dan kesenian.
                ',
                'jenis' => 'Kompetisi',
                'lokasi' => 'Institut Teknologi Del',
                'penyelenggara' => 'Pengurus HIMASTI Divisi Minat dan Bakat',
                'kontak' => '08218766xxxx (Kevin Samosir)',
                'deskripsi' => 'Partisipasi akan kegiatan yang diadakan oleh BEM',
                'penjelasan' => 'Kompetisi ini dirancang oleh kepengurusan HIMASTI untuk anggota HIMASTI guna melatih skill dan meningkatkan solidaritas antar setiap anggota HIMASTI.',
            ],
        ]);
    }
}
