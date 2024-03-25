<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function kurikulum(Request $request)
    {
        $targetYear = $request->query("tahun");

        $kurikulum = null;
        if (!$targetYear) {
            $kurikulum = Kurikulum::get();
        } else {
            $kurikulum = Kurikulum::where('tahun', $targetYear)->get();
        }

        $tahun_kurikulum = Kurikulum::distinct()->whereNot("tahun", null)->orderByDesc("tahun")->get(["tahun"]);

        $data = [
            "kurikulum" => $kurikulum,
            "tahun_kurikulum" => $tahun_kurikulum
        ];
        return view('kurikulum', $data);
    }

    public function adminKurikulum()
    {
        $kurikulum = Kurikulum::orderBy('semester', 'asc')
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

        Kurikulum::insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'semester' => $request->semester,
            'sks' => $request->sks,
            'tahun' => $request->tahun,
            'tahun' => $request->tahun,
        ]);

        return redirect('/admin/kurikulum');
    }

    public function editKurikulum($id)
    {
        $kurikulum = Kurikulum::where('id', $id)
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

        Kurikulum::where('id', $request->id)
            ->update([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'semester' => $request->semester,
                'sks' => $request->sks,
                'tahun' => $request->tahun,
            ]);

        return redirect('/admin/kurikulum');
    }

    public function hapusKurikulum($id)
    {
        Kurikulum::where('id', $id)
            ->delete();

        return redirect('/admin/kurikulum');
    }
}
