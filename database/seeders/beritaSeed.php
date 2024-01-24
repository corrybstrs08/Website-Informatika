<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class beritaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news_article')->insert([
            [
                'judul' => '3 Mahasiswa Informatika IT DEL lolos Garuda ACE 2022',
                'deskripsi' => 'Garuda Research And Academic Of Excellence (Garuda ACE) merupakan salah satu program MBKM berjenis Penelitian yang diberikan kepada mahasiswa berprestasi  yang ingin berkolaborasi dengan profesor di AS.',
                'isi' => "Program Garuda ACE ini adalah program capacity building selama dua tahun, untuk murid-murid Indonesia (dosen/peneliti/profesional muda) yang akan mendapatkan bimbingan langsung dari para Profesor dan peneliti di UChicago Amerika, sehingga diharapkan mereka dapat mendapatkan ‘Letter of Acceptance (LoA)’ dalam PhD program di UChicago atau di universitas terkemuka lainnya, karena pembimbingan intensif sebelumnya.

            Dan dari Institut Teknologi Del ada 5 mahasiswa terpilih yang akan dikirimkan untuk mengikuti program ini, yaitu:
            1. Natanael Jansudin Siregar
            2. Marcellino Kelly N Lumban Gaol
            3. Wordyka Yehezkiel Nainggolan
            4. Yoel Napitupulu
            5. Roosen Gabriel Manurung
            
            Tiga di antara lima mahasiswa tersebut yaitu Natanael Jansudin Siregar, Yoel Napitupulu, dan Roosen Gabriel Manurung adalah mahasiswa yang berasal dari HMASTI (Himpunan Mahasiswa S1 Informatika).",
                'gambar' => '1.jpg',
            ],
            [
                'judul' => 'Mahasiswa prodi Informatika lolos Penerima  P2MW 2022',
                'deskripsi' => 'Mahasiswa IT Del Prodi Informatika yang lolos sebagai Penerima Bantuan Program Pembinaan Mahasiswa Wirausaha (P2MW) 2022: Samuel Sibuea, Guntur Sinaga, Lamboy Sirait, Michael Napitupulu',
                'isi' => "Dengan Judul Usaha 'Manajemen Sumber Daya Tambak Toba' 3 mahasiswa IT del pada Prodi Informatika lolos sebagai Penerima Bantuan Program Pembinaan Mahasiswa Wirausaha (P2MW) 2022:  Samuel Sibuea, Guntur Sinaga, Lamboy Sirait, Michael Napitupulu

                Program Pembinaan Mahasiswa Wirausaha (P2MW) merupakan program pengembangan usaha mahasiswa yang telah memiliki usaha melalui bantuan dana pengembangan dan pembinaan dengan melakukan pendampingan serta pelatihan (coaching) usaha kepada mahasiswa yang bertujuan untuk mendorong dan mencetak mahasiswa dalam menjalankan dan mengembangkan wirausaha serta meningkatkan program kewirausahaan di perguruan tinggi.
                
                Kategori usaha yang tersedia juga berbagai jenis, yakni: 
                Makanan dan Minuman
                Menghasilkan produk makanan dan minuman baik dari bahan mentah menjadi setengah jadi, bahan setengah jadi diolah menjadi produk akhir (bukan reseller).
                Produksi atau Budidaya
                Proses produksi dari hulu ke hilir bidang-bidang agrokomplek (pertanian tanaman pangan, hortikultura, kehutanan, peternakan, dan perikanan).
                Industri Kreatif, Seni, Budaya, dan Pariwisata
                Proses penciptaan produk dan jasa yang memiliki nilai kreativitas dan ide yang dijadikan produk ekonomi dalam bidang seni, budaya, dan pariwisata.
                Jasa dan Perdagangan
                Melakukan aktivitas jual beli barang dan/atau jasa yang dilakukan antara pedagang dan pembeli.
                Teknologi Terapan
                Penerapan teknologi tepat guna di berbagai sektor kehidupan.
                ",
                'gambar' => '2.png',
            ],
            [
                'judul' => 'Tim CICAKCICAK DIDINDING Ist Runner UP Hackathon Code',
                'deskripsi' => 'Selamat kepada tim Cicak cicak didinding yang memperoleh 1st Runner Up Hackathon Code For The Nation pada tanggal 28 Oktober 2022, juga sebagai Best Speaker pada Hackathon Code For The Nation ',
                'isi' => "Hackathon : Code for the Nation merupakan kompetisi  yang diadakan oleh tiga pihak (riset.ai, Biznet Gio, IT Del) untuk menguji pemahaman terkait bidang keprofesian dalam teknologi informasi serta menguji kemampuan problem solving untuk mahasiswa S1/D3 di daerah Medan dan sekitarnya. Hackathon Competition ini akan diadakan dalam 2 (dua) jenis babak:
                    1. Preliminary Round
                    Tahap Preliminary Round, peserta akan diberikan sebuah studi kasus yang harus diselesaikan dengan membuat proposal dan video penjelasan atas masalah yang ada.
                    2. Final Round
                    Final Round, peserta akan merealisasikan proposal yang ditawarkan dalam bentuk demo produk dan diuji dengan melakukan presentasi proposal beserta dengan demo produk. Solusi yang diberikan harus diselesaikan dengan memanfaatkan keberadaan dan perkembangan teknologi informasi khususnya Artificial Intelligence (AI) .
                    Kompetisi ini sudah selesai dilaksanakan. Dan 1 tim yaitu tim CICAKCICAK DIDINDING yang terdiri dari  Natanael Jansudin Siregar, Yoel Napitupulu, dan Roosen Gabriel Manurung memenangkan kompetisi tersebut di kedudukan no 1.
                    ",
                'gambar' => '3.jpg',
            ],
            [
                'judul' => '3 Mahasiswa Informatika berhasil menjadi finalis pada Asia Jakarta Regional Contest pada ICPC
                ',
                'deskripsi' => '3 Mahasiswa Informatika berangkat ke Jakarta untuk menjadi finalis Asia Jakarta Regional Contest setelah lolos pada tahap pertama INC (Indonesia National Contest)
                ',
                'isi' => "ICPC merupakan sebuah program inovatif untuk meningkatkan ambisi, kemampuan memecahkan masalah, dan peluang siswa terkuat di bidang komputasi. Kontes telah berkembang menjadi kolaborasi universitas di seluruh dunia yang menjadi tuan rumah kompetisi regional yang memajukan tim ke putaran kejuaraan global tahunan, ICPC World Final.

                International Collegiate Programming Contest (ICPC) adalah kompetisi pemrograman global utama yang diselenggarakan oleh dan untuk universitas dunia. ICPC berafiliasi dengan Yayasan ICPC.
                Setelah lulus pada tahap pertama yakni tahap INC (Indonesia National Contest) 3 mahasiswa Informatika: Yosua Haloho, Michael Napitupulu, Samuel Sibuea dengan dukungan kampus IT Del berangkat ke Jakarta sebagai finalis Asia Jakarta Regional Contest.
                    ",
                'gambar' => '4.jpg',
            ],
            [
                'judul' => 'Salah satu Mahasiswa Informatika menjadi peserta ONMIPA Tingkat Nasional Tahun 2022

                ',
                'deskripsi' => 'Enrico Hezkiel Sirait yang merupakan Mahasiswa Informatika angkatan 2021 yang berhasil lolos mengikuti ONMIPA Tingkat Nasional Tahun 2022

                ',
                'isi' => "Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia melalui Balai Pengembangan Talenta Indonesia telah melaksanakan seleksi tingkat wilayah Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam (ON MIPA) tahun 2022 pada tanggal  28-29 Juli 2022 secara daring.
                Berdasarkan hasil seleksi dari tim juri ON MIPA tahun 2022, telah ditetapkan para peserta yang lolos seleksi ON MIPA tingkat Wilayah pada tanggal 10 Agustus 2022. Penetapan ini diumumkan melalui surat resmi dari Balai Pengembangan Talenta Indonesia dengan Nomor : 0383/J7.1/PN.00/2022 dan ditandatangani oleh Asep Sukmayadi selaku kepala.
                Penetapan tersebut menjadi babak baru bagi para peserta terpilih untuk melangkah ke seleksi tingkat nasional yang merupakan tahap akhir sekaligus penentuan juara utama dari ON MIPA 2022.
                Seleksi tingkat nasional ON MIPA 2022 rencananya akan dilaksanakan pada 20-24 September 2022 di Malang, sedangkan pengumuman pemenang akan digelar pada 25 September 2022 di lokasi yang sama.
                Adapun kontingen Institut Teknologi Del yang akan melanjutkan perjuangan ke seleksi tingkat nasional adalah sebagai berikut :
                Bidang Matematika :
                Enrico Hezkiel Sirait (S1 Informatika 2021)
                Bidang Biologi:
                Febri Chatarina Sianipar (S1 Teknik Bioproses 2019)                
                    ",
                'gambar' => '5.jpg',
            ],[
                'judul' => ' 3 Mahasiswa menjadi sebagai Partisipasi babak Final Schematics 2022
                ',
                'deskripsi' => 'Selamat kepada 3 mahasiswa Informatika: Guntur Sinaga, Michael Napitupulu, dan Samuel Sibuea sebagai finalis pada Schematics 2022
                ',
                'isi' => "Schematics adalah salah satu event terbesar ITS yang diselenggarakan oleh mahasiswa Teknik Informatika ITS. Schematics merupakan event yang berfokus pada kompetisi pemrograman dan logika, serta memperkenalkan perkembangan teknologi kepada masyarakat luas melalui subevent-subevent Schematics. 

                3 Mahasiswa Informatika; Guntur Sinaga, Michael Napitupulu, dan Samuel Sibuea mengikuti tahap 1 secara online hingga akhirnya lolos sebagai partisipan tahap final pada Schematics 2022. 
                Selamat kepada 3 Mahasiswa Informatika, terus berkarya dan tebarkan pesonamu.
                
                    ",
                'gambar' => '6.png',
            ],
        ]);
    }
}
