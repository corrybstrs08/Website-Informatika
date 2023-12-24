<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //admin Menu

    public function admin()
    {
        return view('adminMenu');
    }

    //VisiMisi
    public function showVisiMisi()
    {
        $visi = DB::table('visi')->get();
        $misi = DB::table('misi')->get();
        $sejarah = DB::table('sejarah')->first();
        return view('adminVisiMisi')
            ->with('misi', $misi)
            ->with('visi', $visi)
            ->with('sejarah', $sejarah);
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

        DB::table('misi')->insert([
            'misi' => $request->misi,
        ]);

        return redirect('/admin/visiMisi');
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

        $visi = DB::table('visi')->first();

        DB::table('visi')
            ->where('visi', $visi->visi)
            ->update([
                'visi' => $request->visi,
            ]);

        return redirect('/admin/visiMisi');
    }

    public function editSejarah()
    {
        $sejarah = DB::table('sejarah')->first();

        return view('adminSejarahEdit')->with('sejarah', $sejarah);
    }

    public function editSejarah_proses(Request $request)
    {
        $this->validate($request, [
            'sejarah' => 'required',
        ]);

        $sejarah = DB::table('sejarah')->first();

        DB::table('sejarah')
            ->where('sejarah', $sejarah->sejarah)
            ->update([
                'sejarah' => $request->sejarah,
            ]);
        return redirect('/admin/visiMisi');
    }

    public function editMisi($id)
    {
        $misi = DB::table('misi')
            ->where('id', $id)
            ->first();

        return view('adminMisiEdit')->with('misi', $misi);
    }

    public function editMisi_proses(Request $request)
    {
        $this->validate($request, [
            'misi' => 'required',
        ]);

        DB::table('misi')
            ->where('id', $request->id)
            ->update([
                'misi' => $request->misi,
            ]);

        return redirect('/admin/visiMisi');
    }

    public function hapusMisi($id)
    {
        DB::table('misi')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/visiMisi');
    }

}
