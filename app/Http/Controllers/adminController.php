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

    public function addEvents()
    {
        return view('adminEventsAdd');
    }

    public function addEvents_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi_singkat' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'penjelasan' => 'required',
        ]);

        DB::table('events')->insert([
            'nama' => $request->nama,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'jenis' => $request->jenis,
            'lokasi' => $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'penjelasan' => $request->penjelasan,
        ]);

        return redirect('/');
    }

    public function showEvent()
    {
        $events = DB::table('events')
            ->orderBy('id', 'desc')
            ->get();

        return view('adminEvents')->with('events', $events);
    }

    public function editEvent($id)
    {
        $events = DB::table('events')
            ->where('id', $id)
            ->first();

        return view('adminEventsEdit')->with('events', $events);
    }

    public function editEvent_proses(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi_singkat' => 'required',
            'jenis' => 'required',
            'lokasi' => 'required',
            'penyelenggara' => 'required',
            'kontak' => 'required',
            'deskripsi' => 'required',
            'penjelasan' => 'required',
        ]);

        DB::table('events')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_selesai' => $request->waktu_selesai,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'jenis' => $request->jenis,
                'lokasi' => $request->lokasi,
                'penyelenggara' => $request->penyelenggara,
                'kontak' => $request->kontak,
                'deskripsi' => $request->deskripsi,
                'penjelasan' => $request->penjelasan,
            ]);

        return redirect('/admin/showEvent');
    }

    public function hapusEvent($id)
    {
        DB::table('events')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/showEvent');
    }

    public function berita()
    {
        $berita = DB::table('news_article')
            ->orderBy('id', 'desc')
            ->get();

        return view('adminBerita')->with('berita', $berita);
    }

    public function editBerita($id)
    {
        $berita = DB::table('news_article')
            ->where('id', $id)
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

        DB::table('news_article')
            ->where('id', $request->id)
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
        DB::table('news_article')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/berita');
    }

    //Dosen

    public function dosen()
    {
        $dosen = DB::table('dosen')->get();

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

        DB::table('dosen')->insert([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file->getClientOriginalName(),
        ]);

        return redirect('/admin/dosen');
    }

    public function editDosen($id)
    {
        $dosen = DB::table('dosen')
            ->where('id', $id)
            ->first();

        return view('adminDosenEdit')->with('dosen', $dosen);
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

        DB::table('dosen')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->file->getClientOriginalName(),
            ]);

        return redirect('/admin/dosen');
    }

    public function hapusDosen($id)
    {
        DB::table('dosen')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/dosen');
    }

    public function addBerita()
    {
        return view('adminBeritaAdd');
    }

    public function addBerita_proses(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',
        ]);

        $news = DB::table('news_article')
            ->orderBy('id', 'desc')
            ->latest()
            ->first();

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $news->id;
        $request->file->move(public_path('asset/img/berita'), $imageName + 1 . '.' . $extension);

        DB::table('news_article')->insert([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,
            'gambar' => $imageName + 1 . '.' . $extension,
        ]);

        return redirect('/admin/berita');
    }

    //Kompetisi
    public function showKompetisi()
    {
        $kompetisi = DB::table('kompetisi')
            ->orderBy('id', 'desc')
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

        $news = DB::table('news_article')
            ->orderBy('id', 'desc')
            ->latest()
            ->first();

        $imageExt = $request->file->getClientOriginalName();

        // Get file extension
        $pathInfo = pathinfo($imageExt);
        $extension = $pathInfo['extension'];

        $imageName = $news->id;
        $request->file->move(public_path('asset/img/Kompetisi'), $imageName + 1 . '.' . $extension);

        DB::table('kompetisi')->insert([
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
        $kompetisi = DB::table('kompetisi')
            ->where('id', $id)
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

        DB::table('Kompetisi')
            ->where('id', $request->id)
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
        DB::table('kompetisi')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/kompetisi');
    }

    //kurikulum
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

    //Kompetisi
    public function showKurikulum()
    {
        $kurikulum = DB::table('kurikulum')
            ->orderBy('semester', 'asc')
            ->get();

        return view('adminKurikulum')->with('kurikulum', $kurikulum);
    }

    public function addKurikulum()
    {
        return view('adminKurikulumAdd');
    }

    public function addKurikulum_proses(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'semester' => 'required',
        ]);

        DB::table('kurikulum')->insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'semester' => $request->semester,
            'sks' => $request->semester,
        ]);

        return redirect('/admin/kurikulum');
    }

    public function editKurikulum($id)
    {
        $kurikulum = DB::table('kurikulum')
            ->where('id', $id)
            ->first();

        return view('adminKurikulumEdit')->with('kurikulum', $kurikulum);
    }

    public function editKurikulum_proses(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'semester' => 'required',
        ]);

        DB::table('kurikulum')
            ->where('id', $request->id)
            ->update([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'semester' => $request->semester,
                'sks' => $request->sks,
            ]);

        return redirect('/admin/kurikulum');
    }

    public function hapusKurikulum($id)
    {
        DB::table('kurikulum')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/kurikulum');
    }

    //Organisasi

    public function organisasi()
    {
        $organisasi = DB::table('organisasi')->get();

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

        DB::table('organisasi')->insert([
            'nama' => $request->nama,
            'gambar' => $request->gambar->getClientOriginalName(),
            'divisi' => $request->divisi,
            'jabatan' => $request->jabatan

        ]);

        return redirect('/admin/organisasi');
    }

    public function editOrganisasi($id)
    {
        $organisasi = DB::table('organisasi')
            ->where('id', $id)
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

        DB::table('organisasi')
            ->where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'gambar' => $request->gambar->getClientOriginalName(),
                'divisi' => $request->divisi,
            ]);

        return redirect('/admin/organisasi');
    }

    public function hapusOrganisasi($id)
    {
        DB::table('organisasi')
            ->where('id', $id)
            ->delete();

        return redirect('/admin/organisasi');
    }


}
