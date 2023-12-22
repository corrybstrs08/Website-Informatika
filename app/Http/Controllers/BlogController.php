<?php

namespace App\Http\Controllers;

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
        $responseData = Http::withToken($this->getToken())
            ->asForm()
            ->post('https://cis-dev.del.ac.id/api/library-api/mahasiswa')
            ->body();

        //mengubah data tersebut menjadi array
        $jsonData = json_decode($responseData, true);
        $mahasiswa = $jsonData['data']['mahasiswa'];

        $mahasiswaIF = array_filter($mahasiswa, function ($item) {
            return $item['prodi_name'] == 'S1 Informatika';
        });
        $aktifMahasiswa = array_filter($mahasiswaIF, function ($item) {
            return $item['status'] == 'Aktif';
        });
        $alumniMahasiswa = array_filter($mahasiswaIF, function ($item) {
            return $item['status'] == 'Lulus';
        });
        $alumniMahasiswaCount = count($alumniMahasiswa);
        $aktifMahasiswaCount = count($aktifMahasiswa);

        $jumlah = DB::table('jumlah')->get();
        $dosen = DB::table('dosen')->count();
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

    public function sejarah()
    {
        $sejarah = DB::table('sejarah')->first();
        return view('sejarah')->with('sejarah', $sejarah);
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

    public function visiMisi()
    {
        $visi = DB::table('visi')->get();
        $misi = DB::table('misi')->get();
        return view('visiMisi')
            ->with('misi', $misi)
            ->with('visi', $visi);
    }

    public function tampil_event($id)
    {
        $event = DB::table('events')
            ->where('id', $id)
            ->first();
        return view('tampil_event', ['event' => $event]);
    }

    public function eventAll()
    {
        $event = DB::table('events')
            ->orderBy('waktu_mulai', 'desc')
            ->paginate(5);

        return view('eventAll', ['events' => $event]);
    }

    public function tampil_berita($id)
    {
        $news = DB::table('news_article')
            ->where('id', $id)
            ->first();
        return view('tampil_berita', ['berita' => $news]);
    }

    public function tampil_kompetisi($id)
    {
        $kompetisi = DB::table('kompetisi')
            ->where('id', $id)
            ->first();
        return view('tampil_kompetisi', ['kompetisi' => $kompetisi]);
    }

    public function capaian()
    {
        return view('capaian');
    }

    public function getToken()
    {
        $response = Http::asForm()
            ->post('https://cis-dev.del.ac.id/api/jwt-api/do-auth', [
                'username' => 'arlinta.barus',
                'password' => 'Del@2022',
            ])
            ->body();

        //untuk membuat jadi array
        $json = json_decode($response, true);

        $token = $json['token'];
        return $token;

    }

    public function mahasiswaAlumni()
    {
        $responseDataDosen = Http::withToken($this->getToken())
            ->asForm()
            ->post('https://cis-dev.del.ac.id/api/library-api/mahasiswa')
            ->body();

        //mengubah data tersebut menjadi array
        $jsonDataDosen = json_decode($responseDataDosen, true);
        $mahasiswa = $jsonDataDosen['data']['mahasiswa'];

        $alumniMahasiswa = array_filter($mahasiswa, function ($item) {
            return $item['status'] == 'Lulus';
        });

        $alumniMahasiswaCount = count($alumniMahasiswa);

        return view('mahasiswaAlumni')
            ->with('data', $alumniMahasiswa)
            ->with('jumlah', $alumniMahasiswaCount);
    }

    public function contactUs()
    {
        return view('contactUS');
    }

    public function beritaAll()
    {
        $berita = DB::table('news_article')
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('beritaAll')->with('berita', $berita);
    }

    public function kompetisiAll()
    {
        $kompetisi = DB::table('kompetisi')
            ->orderBy('id', 'desc')
            ->paginate(3);

        return view('kompetisiAll', ['kompetisi' => $kompetisi]);
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

    function getDataDosen($userId, $token)
    {
        //untuk mengambil data dosen menggunakan token yang telah didapat sebelumnya
        $responseDataDosen = Http::withToken($token)
            ->asForm()
            ->post('https://cis-dev.del.ac.id/api/library-api/dosen?userid=')
            ->body();

        //mengubah data tersebut menjadi array
        $jsonDataDosen = json_decode($responseDataDosen, true);

        //mengecek apakah data benar benar dosen
        if (sizeof($jsonDataDosen['data']['dosen']) == 0) {
            return Redirect::back()
                ->withInput()
                ->withErrors(['password' => 'salah']);
        }

        //menampung variabel dosen tersebut
        $nama = $jsonDataDosen['data']['dosen'][0]['nama'];
    }
}
