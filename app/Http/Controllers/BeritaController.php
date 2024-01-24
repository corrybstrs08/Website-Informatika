<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampil_berita($id)
    {
        $news = Berita::where('id', $id)
            ->first();
        return view('tampil_berita', ['berita' => $news]);
    }

    public function beritaAll()
    {
        $berita = Berita::orderBy('id', 'desc')
            ->paginate(3);
        return view('beritaAll')->with('berita', $berita);
    }

    public function berita()
    {
        $berita = Berita::orderBy('id', 'desc')
            ->get();

        return view('adminBerita')->with('berita', $berita);
    }

    public function editBerita($id)
    {
        $berita = Berita::where('id', $id)
            ->first();

        return view('adminBeritaEdit')->with('berita', $berita);
    }

    public function editBerita_proses(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi' => 'required',
            'file' => 'required',
        ]);

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $request->id;
        $request->file->move(public_path('asset/img/berita'), $imageName . '.' . $extension);

        Berita::where('id', $request->id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'isi' => $request->isi,
                'gambar' => $imageName . '.' . $extension,
            ]);
        return redirect('/admin/berita');
    }

    public function hapusBerita($id)
    {
        Berita::where('id', $id)
            ->delete();

        return redirect('/admin/berita');
    }

    public function addBerita()
    {
        return view('adminBeritaAdd');
    }

    public function addBerita_proses(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'file' => 'required',
        ]);

        $news = Berita::orderBy('id', 'desc')
            ->latest()
            ->first();

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $news->id;
        $request->file->move(public_path('asset/img/berita'), $imageName + 1 . '.' . $extension);

        Berita::insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,
            'gambar' => $imageName + 1 . '.' . $extension,
        ]);

        return redirect('/admin/berita');
    }
}
