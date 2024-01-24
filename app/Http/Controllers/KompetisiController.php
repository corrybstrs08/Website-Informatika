<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kompetisi;

class KompetisiController extends Controller
{
    public function tampil_kompetisi($id)
    {
        $kompetisi = Kompetisi::where('id', $id)
            ->first();
        return view('tampil_kompetisi', ['kompetisi' => $kompetisi]);
    }

    public function kompetisiAll()
    {
        $kompetisi = Kompetisi::orderBy('id', 'desc')
            ->paginate(3);

        return view('kompetisiAll', ['kompetisi' => $kompetisi]);
    }

    public function showKompetisi()
    {
        $kompetisi = Kompetisi::orderBy('id', 'desc')
            ->get();

        return view('adminKompetisi')->with('kompetisi', $kompetisi);
    }

    public function addKompetisi()
    {
        return view('adminKompetisiAdd');
    }

    public function addKompetisi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',
            'links' => 'required',
            'file' => 'required',
        ]);

        $news = Kompetisi::orderBy('id', 'desc')
            ->first();

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $news->id;
        $request->file->move(public_path('asset/img/Kompetisi'), $imageName + 1 . '.' . $extension);

        Kompetisi::insert([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'penyelenggara' => $request->penyelenggara,
            'keterangan' => $request->keterangan,
            'link' => $request->links,
            'gambar' => $imageName + 1 . '.' . $extension,
        ]);

        return redirect('/admin/kompetisi');
    }

    public function editKompetisi($id)
    {
        $kompetisi = Kompetisi::where('id', $id)
            ->first();

        return view('adminKompetisiEdit')->with('kompetisi', $kompetisi);
    }

    public function editKompetisi_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal' => 'required',
            'penyelenggara' => 'required',
            'keterangan' => 'required',
            'links' => 'required',
        ]);

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $request->id;
        $request->file->move(public_path('asset/img/Kompetisi'), $imageName . '.' . $extension);

        Kompetisi::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'keterangan' => $request->keterangan,
                'link' => $request->links,
                'gambar' => $imageName . '.' . $extension,
            ]);

        return redirect('/admin/kompetisi');
    }

    public function hapusKompetisi($id)
    {
        Kompetisi::where('id', $id)
            ->delete();

        return redirect('/admin/kompetisi');
    }
}
