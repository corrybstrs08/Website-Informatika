<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    private $filtercategory = '';
    private $filtervalue = '';

    public function mahasiswa()
    {
        $angkatan = Mahasiswa::select('angkatan')
            ->distinct()
            ->get();

        $status = Mahasiswa::select('status')
            ->distinct()
            ->get();

        if ($this->filtercategory == 'angkatan') {
            $mahasiswa = Mahasiswa::where('angkatan', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'angkatan' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == 'status') {
            $mahasiswa = Mahasiswa::where('status', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'status' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == '') {
            $mahasiswa = Mahasiswa::orderBy('nim', 'ASC')
                ->paginate(20);
        }

        $mahasiswa->appends([
            'searchby' => $this->filtercategory,
            'searchvalue' => $this->filtervalue,
        ]);

        // dd($angkatan);
        return view('mahasiswa')
            ->with('data', $mahasiswa)
            ->with('angkatan', $angkatan)
            ->with('status', $status);
    }

    public function adminFilterMahasiswa(Request $request){
        if ($request->searchby == 'angkatan') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == 'status') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == '') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        // dd($this->filtervalue);
        $mahasiswaView = $this->adminMahasiswa();
        return $mahasiswaView;
    }

    public function filterMahasiswa(Request $request)
    {

        if ($request->searchby == 'angkatan') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == 'status') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        if ($request->searchby == '') {
            $this->filtercategory = $request->searchby;
            $this->filtervalue = $request->searchvalue;
        }

        // dd($this->filtervalue);
        $mahasiswaView = $this->mahasiswa();
        return $mahasiswaView;
    }

    public function adminMahasiswa()
    {
        $angkatan = Mahasiswa::select('angkatan')
            ->distinct()
            ->get();

        $status = Mahasiswa::select('status')
            ->distinct()
            ->get();

        if ($this->filtercategory == 'angkatan') {
            $mahasiswa = Mahasiswa::where('angkatan', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'angkatan' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == 'status') {
            $mahasiswa = Mahasiswa::where('status', '=', $this->filtervalue)
                ->orderBy('nim', 'ASC')
                ->paginate(20)
                ->appends([
                    'status' => $this->filtervalue
                ]);
        }

        if ($this->filtercategory == '') {
            $mahasiswa = Mahasiswa::orderBy('nim', 'ASC')
                ->paginate(20);
        }

        $mahasiswa->appends([
            'searchby' => $this->filtercategory,
            'searchvalue' => $this->filtervalue,
        ]);

        // dd($angkatan);
        return view('adminMahasiswa')
            ->with('data', $mahasiswa)
            ->with('angkatan', $angkatan)
            ->with('status', $status);
    }

    public function addMahasiswa()
    {
        return view('adminMahasiswaAdd');
    }

    public function addMahasiswa_proses(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'angkatan' => 'required',
            'status' => 'required'
        ]);

        Mahasiswa::insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'status' => $request->status,
        ]);

        return redirect('/admin/mahasiswa');
    }

    public function editMahasiswa($id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)
            ->first();

        return view('adminMahasiswaEdit')->with('mahasiswa', $mahasiswa);
    }

    public function editMahasiswa_proses(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'angkatan' => 'required',
            'status' => 'required'
        ]);

        Mahasiswa::where('id', $request->id)
            ->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'angkatan' => $request->angkatan,
                'status' => $request->status,
            ]);

        return redirect('/admin/mahasiswa');
    }

    public function hapusMahasiswa($id)
    {
        Mahasiswa::where('id', $id)
            ->delete();

        return redirect('/admin/mahasiswa');
    }
}
