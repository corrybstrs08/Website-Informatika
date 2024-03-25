<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function staffDosen()
    {
        $dosen = Dosen::get();

        return view('staffDosen')->with('dosen', $dosen);
    }

    public function detailDosen($id)
    {
        $dosen = Dosen::where('id', $id)
            ->first();
        return view('detailDosen', ['dosen' => $dosen]);
    }

    public function dosen()
    {
        $dosen = Dosen::get();

        return view('adminDosen')->with('dosen', $dosen);
    }

    public function addDosen()
    {
        return view('adminDosenAdd');
    }

    public function addDosen_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',
        ]);

        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/Dosen'), $imageName);

        Dosen::insert([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file->getClientOriginalName(),
            'status' => $request->status,
        ]);

        return redirect('/admin/dosen');
    }

    public function editDosen($id)
    {
        $dosen = Dosen::where('id', $id)
            ->first();

        return view('adminDosenedit')->with('dosen', $dosen);
    }

    public function editDosen_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('asset/img/Dosen'), $imageName);

        Dosen::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->file->getClientOriginalName(),
                'status' => $request->status,
            ]);

        return redirect('/admin/dosen');
    }

    public function hapusDosen($id)
    {
        Dosen::where('id', $id)
            ->delete();

        return redirect('/admin/dosen');
    }
}
