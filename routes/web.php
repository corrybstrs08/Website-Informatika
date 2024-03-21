<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/organisasi', [OrganisasiController::class, 'organisasi']);
Route::get('/kurikulum', [KurikulumController::class, 'kurikulum']);
Route::get('/sejarah', [SejarahController::class, 'sejarah']);
Route::get('/profil-lulusan', [BlogController::class, 'profilLulusan']);
Route::get('/staffDosen', [DosenController::class, 'staffDosen']);
Route::get('/staffDosen/{id}', [DosenController::class, 'detailDosen']); //EditCorry
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/filter-mahasiswa', [MahasiswaController::class, 'filterMahasiswa'])->name('filter.mahasiswa');
Route::get('/visiMisi', [VisimisiController::class, 'visiMisi']);
Route::get('/event/{id}', [EventController::class, 'tampil_event']);
Route::get('/eventsAll', [EventController::class, 'eventAll']);
Route::get('/beritaAll', [BeritaController::class, 'beritaAll']);
Route::get('/berita/{id}', [BeritaController::class, 'tampil_berita']);
Route::get('/kompetisi/{id}', [KompetisiController::class, 'tampil_kompetisi']);
Route::get('/kompetisiAll', [KompetisiController::class, 'kompetisiAll']);
Route::post('/cariProses', [BlogController::class, 'cariProses']);



//ADMIN
Route::get('/admin', [adminController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN NEWS
Route::get('/admin/berita', [BeritaController::class, 'berita'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/addBerita', [BeritaController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [BeritaController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addBerita', [BeritaController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [BeritaController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editBerita/{id}', [BeritaController::class, 'editBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editBerita/proses', [BeritaController::class, 'editBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusBerita/{id}', [BeritaController::class, 'hapusBerita'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN EVENTS
Route::get('/admin/showEvent', [EventController::class, 'showEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addEvents', [EventController::class, 'addEvents'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addEvents_proses', [EventController::class, 'addEvents_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editEvents/{id}', [EventController::class, 'editEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editEvents/proses', [EventController::class, 'editEvent_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusEvent/{id}', [EventController::class, 'hapusEvent'])->middleware(['auth', 'verified'])->name('dashboard');

//DOSEN
Route::get('/admin/dosen', [DosenController::class, 'dosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addDosen', [DosenController::class, 'addDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addDosen_proses', [DosenController::class, 'addDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editDosen/{id}', [DosenController::class, 'editDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editDosen_proses', [DosenController::class, 'editDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusDosen/{id}', [DosenController::class, 'hapusDosen'])->middleware(['auth', 'verified'])->name('dashboard');

//Kompetisi
Route::get('/admin/kompetisi', [KompetisiController::class, 'showKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addKompetisi', [KompetisiController::class, 'addKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addKompetisi_proses', [KompetisiController::class, 'addKompetisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editKompetisi/{id}', [KompetisiController::class, 'editKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editKompetisi/proses', [KompetisiController::class, 'editKompetisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusKompetisi/{id}', [KompetisiController::class, 'hapusKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');

//Kurikulum
Route::get('/admin/kurikulum', [KurikulumController::class, 'adminKurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addKurikulum', [KurikulumController::class, 'addkurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addKurikulum_proses', [KurikulumController::class, 'addkurikulum_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editkurikulum/{id}', [KurikulumController::class, 'editkurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editkurikulum/proses', [KurikulumController::class, 'editkurikulum_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapuskurikulum/{id}', [KurikulumController::class, 'hapuskurikulum'])->middleware(['auth', 'verified'])->name('dashboard');


//Visi Misi
Route::get('/admin/visiMisi', [VisiMisiController::class, 'showVisiMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addMisi', [VisiMisiController::class, 'addMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addMisi/proses', [VisiMisiController::class, 'addMisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editMisi/{id}', [VisiMisiController::class, 'editMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editMisi/proses', [VisiMisiController::class, 'editMisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editVisi', [VisiMisiController::class, 'editVisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editVisi/proses', [VisiMisiController::class, 'editVisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editSejarah', [SejarahController::class, 'editSejarah'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editSejarah/proses', [SejarahController::class, 'editSejarah_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusMisi/{id}', [VisiMisiController::class, 'hapusMisi'])->middleware(['auth', 'verified'])->name('dashboard');


//Organisasi
Route::get('/admin/organisasi', [OrganisasiController::class, 'adminOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addOrganisasi', [OrganisasiController::class, 'addOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addOrganisasi_proses', [OrganisasiController::class, 'addOrganisasi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editOrganisasi/{id}', [OrganisasiController::class, 'editOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editOrganisasi_proses', [OrganisasiController::class, 'editOrganisasi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusOrganisasi/{id}', [OrganisasiController::class, 'hapusOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('adminMenu');
})->middleware(['auth', 'verified'])->name('dashboard');

//Mahasiswa
Route::get('/admin/mahasiswa', [MahasiswaController::class, 'adminMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addMahasiswa', [MahasiswaController::class, 'addMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addMahasiswa_proses', [MahasiswaController::class, 'addMahasiswa_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editMahasiswa/{id}', [MahasiswaController::class, 'editMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editMahasiswa_proses', [MahasiswaController::class, 'editMahasiswa_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusMahasiswa/{id}', [MahasiswaController::class, 'hapusMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
