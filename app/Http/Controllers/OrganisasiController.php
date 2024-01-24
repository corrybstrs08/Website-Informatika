<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function organisasi()
    {
        $organisasi = Organisasi::get();
        return view('organisasi')->with('organisasi', $organisasi);
    }

    public function adminOrganisasi()
    {
        $organisasi = Organisasi::get();

        return view('adminOrganisasi')->with('organisasi', $organisasi);
    }

    public function addOrganisasi()
    {
        return view('adminOrganisasiAdd');
    }

    public function addOrganisasi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'jabatan' => 'required'
        ]);

        $imageOrganisasiName = $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('asset/img/Organisasi'), $imageOrganisasiName);

        Organisasi::insert([
            'nama' => $request->nama,
            'gambar' => $request->gambar->getClientOriginalName(),
            'divisi' => $request->divisi,
            'jabatan' => $request->jabatan

        ]);

        return redirect('/admin/organisasi');
    }

    public function editOrganisasi($id)
    {
        $organisasi = Organisasi::where('id', $id)
            ->first();

        return view('adminOrganisasiEdit')->with('organisasi', $organisasi);
    }

    public function editOrganisasi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'divisi' => 'required',
            'jabatan' => 'required'

        ]);

        $imageOrganisasiName = $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('asset/img/Organisasi'), $imageOrganisasiName);

        Organisasi::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'gambar' => $request->gambar->getClientOriginalName(),
                'divisi' => $request->divisi,
            ]);

        return redirect('/admin/organisasi');
    }

    public function hapusOrganisasi($id)
    {
        Organisasi::where('id', $id)
            ->delete();

        return redirect('/admin/organisasi');
    }
}
