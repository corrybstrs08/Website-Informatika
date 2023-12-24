<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    /**
     * Menampilkan halaman visi dan misi.
     *
     * @return \Illuminate\View\View
     */
    public function visiMisi()
    {
        // Mengambil data visi dari tabel 'visi'
        $visi = DB::table('visi')->get();

        // Mengambil data misi dari tabel 'misi'
        $misi = DB::table('misi')->get();

        // Menampilkan halaman 'visiMisi' dan meneruskan data visi dan misi ke tampilan
        return view('visiMisi')
            ->with('misi', $misi)
            ->with('visi', $visi);
    }
}
