<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Support\Facades\DB;
use App\Models\Visi;
use App\Models\Sejarah;
use Illuminate\Http\Request;

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
        $visi = Visi::get();

        // Mengambil data misi dari tabel 'misi'
        $misi = Misi::get();

        // Menampilkan halaman 'visiMisi' dan meneruskan data visi dan misi ke tampilan
        return view('visiMisi')
            ->with('misi', $misi)
            ->with('visi', $visi);
    }

    public function showVisiMisi()
    {
        $visi = Visi::get();
        $misi = Misi::get();
        $sejarah = Sejarah::first();
        return view('adminVisiMisi')
            ->with('misi', $misi)
            ->with('visi', $visi)
            ->with('sejarah', $sejarah);
    }

    public function editVisi()
    {
        $visi = DB::table('visi')->first();

        return view('adminVisiEdit')->with('visi', $visi);
    }

    public function editVisi_proses(Request $request)
    {
        $this->validate($request, [
            'visi' => 'required',
        ]);

        $visi = Visi::first();

        Visi::where('visi', $visi->visi)
            ->update([
                'visi' => $request->visi,
            ]);

        return redirect('/admin/visiMisi');
    }

    public function addMisi()
    {
        return view('adminMisiAdd');
    }

    public function addMisi_proses(Request $request)
    {
        $this->validate($request, [
            'misi' => 'required',
        ]);

        Misi::insert([
            'misi' => $request->misi,
        ]);

        return redirect('/admin/visiMisi');
    }

    public function editMisi($id)
    {
        $misi = Misi::where('id', $id)
            ->first();

        return view('adminMisiEdit')->with('misi', $misi);
    }

    public function editMisi_proses(Request $request)
    {
        $this->validate($request, [
            'misi' => 'required',
        ]);

        Misi::where('id', $request->id)
            ->update([
                'misi' => $request->misi,
            ]);

        return redirect('/admin/visiMisi');
    }

    public function hapusMisi($id)
    {
        Misi::where('id', $id)
            ->delete();

        return redirect('/admin/visiMisi');
    }
}
