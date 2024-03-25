<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    private $filtercategory = '';
    private $filtervalue = '';
    public function home()
    {
        $alumniMahasiswa = Mahasiswa::where('status', '=', 'Lulus')->get();
        $aktifMahasiswa = Mahasiswa::where('status', 'Aktif')->get();
        $alumniMahasiswaCount = count($alumniMahasiswa);
        $aktifMahasiswaCount = count($aktifMahasiswa);

        $jumlah = DB::table('jumlah')->get();
        $dosen = DB::table('dosen')
                ->where('status', 'Aktif')
                ->count();
        $kompetisi = DB::table('kompetisi')
            ->orderBy('tanggal', 'desc')
            ->paginate(3);
        $berita = DB::table('news_article')
            ->orderBy('id', 'desc')
            ->paginate(6);
        $events = DB::table('events')
            ->orderBy('waktu_mulai', 'desc')
            ->paginate(3);
        $beritas = DB::table('news_article')
            ->orderBy('id', 'desc')
            ->skip(3)
            ->take(0)
            ->get();

        // mengirim data pegawai ke view index
        return view('home')
            ->with('jumlah', $jumlah)
            ->with('dosen', $dosen)
            ->with('berita', $berita)
            ->with('beritas', $beritas)
            ->with('events', $events)
            ->with('kompetisi', $kompetisi)
            ->with('jumlahAlumni', $alumniMahasiswaCount)
            ->with('jumlahAktif', $aktifMahasiswaCount);
    }

    public function profil_lulusan()
    {
        return view('profil_lulusan');
    }

    public function profilLulusan()
    {
        return view('profil_lulusan');
    }

    //editan
    public function register()
    {
        return view('auth.register');
    }


    public function capaian()
    {
        return view('capaian');
    }


    public function contactUs()
    {
        return view('contactUS');
    }


    public function cariProses(Request $request)
    {
        $cari = $request->cari;

        $kompetisi = DB::table('kompetisi')
            ->where('nama', 'like', '%' . $cari . '%')
            ->paginate();
        $berita = DB::table('news_article')
            ->where('judul', 'like', '%' . $cari . '%')
            ->paginate();
        $events = DB::table('events')
            ->where('nama', 'like', '%' . $cari . '%')
            ->paginate();

        return view('hasilCari')
            ->with('berita', $berita)
            ->with('events', $events)
            ->with('kompetisi', $kompetisi)
            ->with('cari', $cari);
    }

    public function login(Request $request)
    {
        //berguna untuk login ke akun del
        $response = Http::asForm()
            ->post('https://cis-dev.del.ac.id/api/jwt-api/do-auth', [
                'username' => 'arlinta.barus',
                'password' => 'Del@2022',
            ])
            ->body();

        //untuk membuat jadi array
        $json = json_decode($response, true);

        $token = $json['token'];

        //untuk mengambil token
        if ($json['result'] == true) {
            $token = $json['token'];

            return $this->getDataDosen($json['user']['user_id'], $token);
        } else {
            return Redirect::back()
                ->withInput()
                ->withErrors(['password' => 'salah']);
        }
    }

}
