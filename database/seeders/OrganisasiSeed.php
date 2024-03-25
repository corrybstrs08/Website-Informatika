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
                'nama' => "Arie Satia Dharma",
                'gambar' => "Arie.jpg",
                'divisi' => "Pembina",
                'jabatan' => "Pembina"
            ],
            [
                'nama' => "Benhard Yudha",
                'gambar' => "benhard_ketua.jpg",
                'divisi' => "BPH",
                'jabatan' => "Ketua"
            ],
            [
                'nama' => "Baha Ambrosius Sibarani",
                'gambar' => "baha_wakil_ketua.jpg",
                'divisi' => "BPH",
                'jabatan' => " Wakil Ketua"
            ],
            [
                'nama' => "Angelika Ruth",
                'gambar' => "angelika_sekretaris.jpg",
                'divisi' => "BPH",
                'jabatan' => "Sekretaris"
            ],
            [
                'nama' => "Nadia Gracia Sirait",
                'gambar' => "nadia_wakil_sekretaris.jpg",
                'divisi' => "BPH",
                'jabatan' => "Wakil Sekretaris"
            ],
            [
                'nama' => "Ella Tasya Silaban",
                'gambar' => "ella_bendahara.jpeg",
                'divisi' => "BPH",
                'jabatan' => "Bendahara"
            ],
            [
                'nama' => "Olga Prischilla",
                'gambar' => "olga_wakil_bendahara.jpg",
                'divisi' => "BPH",
                'jabatan' => "Wakil Bendahara"
            ],
            [
                'nama' => "Cindy Simangunsong",
                'gambar' => "cindy_pendidikan_kepala.jpg",
                'divisi' => "Pendidikan",
                'jabatan' => "Kepala Divisi"
            ],
            [
                'nama' => "Viktris Lubis",
                'gambar' => "viktris_pendidikan_wakil.jpg",
                'divisi' => "Pendidikan",
                'jabatan' => "Wakil Kepala Divisi"
            ],
            [
                'nama' => "Patricia Sibarani",
                'gambar' => "patricia_pendidikan_anggota.jpg",
                'divisi' => "Pendidikan",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Okdini Hutagalung",
                'gambar' => "okdini_pendidikan_anggota.jpg",
                'divisi' => "Pendidikan",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Intan Sianipar",
                'gambar' => "intan_danus_kepala.jpg",
                'divisi' => "Danus",
                'jabatan' => "Kepada Divisi"
            ],
            [
                'nama' => "Sunanda Munthe",
                'gambar' => "sunanda_danus_wakil.jpg",
                'divisi' => "Danus",
                'jabatan' => "Wakil Kepala Divisi"
            ],
            [
                'nama' => "Naomi Sihombing",
                'gambar' => "naomi_danus_anggota.jpg",
                'divisi' => "Danus",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Angel Lubis",
                'gambar' => "angel_danus_anggota.jpg",
                'divisi' => "Danus",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Lusiana Sikaen",
                'gambar' => "lusiana_danus_anggota.jpg",
                'divisi' => "Danus",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Boy Sitorus",
                'gambar' => "boy_ristek_kepala.jpg",
                'divisi' => "Ristek",
                'jabatan' => "Kepala Divisi"
            ],
            [
                'nama' => "Rafael Manurung",
                'gambar' => "rafael_ristek_anggota.jpg",
                'divisi' => "Ristek",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Putri Manurung",
                'gambar' => "putri_ristek_anggota.jpg",
                'divisi' => "Ristek",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Prans Simarmata",
                'gambar' => "prans_ristek_anggota.jpg",
                'divisi' => "Ristek",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Gerald Nathanael",
                'gambar' => "gerald_minat_kepala.jpg",
                'divisi' => "Minat",
                'jabatan' => "Kepala Divisi"
            ],
            [
                'nama' => "Joel Aritonang",
                'gambar' => "joel_minat_wakil.jpg",
                'divisi' => "Minat",
                'jabatan' => "Wakil Kepala Divisi"
            ],
            [
                'nama' => "Riovan Sihombing",
                'gambar' => "riovan_minat_anggota.jpg",
                'divisi' => "Minat",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Pangeran Simamora",
                'gambar' => "pangeran_minat_anggota.jpg",
                'divisi' => "Minat",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Nada Bakara",
                'gambar' => "nada_minat_anggota.jpg",
                'divisi' => "Minat",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Rachel Nababan",
                'gambar' => "rachel_minat_anggota.jpg",
                'divisi' => "Minat",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Martha Tobing",
                'gambar' => "martha_minat_anggota.jpg",
                'divisi' => "Minat",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Jayfline Hutagalung",
                'gambar' => "jayfline_kominfo_kepala.jpg",
                'divisi' => "Kominfo",
                'jabatan' => "Kepala Divisi"
            ],
            [
                'nama' => "Riskia Sitorus",
                'gambar' => "riskia_kominfo_wakil.jpg",
                'divisi' => "Kominfo",
                'jabatan' => "Wakil Kepala Divisi"
            ],
            [
                'nama' => "Roy Hutajulu",
                'gambar' => "roy_kominfo_anggota.jpg",
                'divisi' => "Kominfo",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Ferdinand Sihombing",
                'gambar' => "ferdinand_kominfo_anggota.jpg",
                'divisi' => "kominfo",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Gerry Bukit",
                'gambar' => "dummy.png",
                'divisi' => "Humas",
                'jabatan' => "Kepala Divisi"
            ],
            [
                'nama' => "Wilona Simbolon",
                'gambar' => "dummy.png",
                'divisi' => "Humas",
                'jabatan' => "Wakil Kepala Divisi"
            ],
            [
                'nama' => "Deak Napitupulu",
                'gambar' => "deak_humas_anggota.jpg",
                'divisi' => "Humas",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Gracesia Marbun",
                'gambar' => "gracesia_humas_anggota.jpg",
                'divisi' => "Humas",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Dian Gulo",
                'gambar' => "dian_humas_anggota.jpg",
                'divisi' => "Humas",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Wesly Siahaan",
                'gambar' => "wesly_humas_anggota.jpg",
                'divisi' => "Humas",
                'jabatan' => "Anggota"
            ],
            [
                'nama' => "Bertrand Sianipar",
                'gambar' => "bertrand_humas_anggota.jpg",
                'divisi' => "Humas",
                'jabatan' => "Anggota"
            ],
        ]);
    }
}
