<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [BlogController::class, 'home']);
//Route::get('/', [BlogController::class, 'register']);
Route::get('/organisasi', [BlogController::class, 'organisasi']);
Route::get('/kurikulum', [BlogController::class, 'kurikulum']);
Route::get('/sejarah', [BlogController::class, 'sejarah']);
Route::get('/profil-lulusan', [BlogController::class, 'profilLulusan']);
Route::get('/staffDosen', [BlogController::class, 'staffDosen']);
Route::get('/staffDosen/{id}', [BlogController::class, 'detailDosen']); //EditCorry
Route::get('/mahasiswa', [BlogController::class, 'mahasiswa']);
Route::get('/filter-mahasiswa', [BlogController::class, 'filterMahasiswa'])->name('filter.mahasiswa');
// Route::get('/mahasiswaAlumni', [BlogController::class, 'mahasiswaAlumni']);
Route::get('/visiMisi', [BlogController::class, 'visiMisi']);
Route::get('/event/{id}', [BlogController::class, 'tampil_event']);
Route::get('/eventsAll', [BlogController::class, 'eventAll']);
Route::get('/beritaAll', [BlogController::class, 'beritaAll']);
Route::get('/berita/{id}', [BlogController::class, 'tampil_berita']);
Route::get('/subscribe', [BlogController::class, 'subscribe']);
Route::get('/kompetisi/{id}', [BlogController::class, 'tampil_kompetisi']);
Route::get('/kompetisiAll', [BlogController::class, 'kompetisiAll']);
Route::get('/contactUs', [BlogController::class, 'contactUs']);
Route::post('/cariProses', [BlogController::class, 'cariProses']);



//ADMIN
Route::get('/admin', [adminController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN NEWS
Route::get('/admin/berita', [adminController::class, 'berita'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/addBerita', [adminController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [adminController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addBerita', [adminController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [adminController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editBerita/{id}', [adminController::class, 'editBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editBerita/proses', [adminController::class, 'editBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusBerita/{id}', [adminController::class, 'hapusBerita'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN EVENTS
Route::get('/admin/showEvent', [adminController::class, 'showEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addEvents', [adminController::class, 'addEvents'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addEvents_proses', [adminController::class, 'addEvents_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editEvents/{id}', [adminController::class, 'editEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editEvents/proses', [adminController::class, 'editEvent_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusEvent/{id}', [adminController::class, 'hapusEvent'])->middleware(['auth', 'verified'])->name('dashboard');

//DOSEN
Route::get('/admin/dosen', [adminController::class, 'dosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addDosen', [adminController::class, 'addDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addDosen_proses', [adminController::class, 'addDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editDosen/{id}', [adminController::class, 'editDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editDosen_proses', [adminController::class, 'editDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusDosen/{id}', [adminController::class, 'hapusDosen'])->middleware(['auth', 'verified'])->name('dashboard');

//Kompetisi
Route::get('/admin/kompetisi', [adminController::class, 'showKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addKompetisi', [adminController::class, 'addKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addKompetisi_proses', [adminController::class, 'addKompetisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editKompetisi/{id}', [adminController::class, 'editKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editKompetisi/proses', [adminController::class, 'editKompetisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusKompetisi/{id}', [adminController::class, 'hapusKompetisi'])->middleware(['auth', 'verified'])->name('dashboard');

//Kurikulum
Route::get('/admin/kurikulum', [adminController::class, 'showKurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addKurikulum', [adminController::class, 'addkurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addKurikulum_proses', [adminController::class, 'addkurikulum_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editkurikulum/{id}', [adminController::class, 'editkurikulum'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editkurikulum/proses', [adminController::class, 'editkurikulum_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapuskurikulum/{id}', [adminController::class, 'hapuskurikulum'])->middleware(['auth', 'verified'])->name('dashboard');


//Visi Misi
Route::get('/admin/visiMisi', [adminController::class, 'showVisiMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addMisi', [adminController::class, 'addMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/addMisi/proses', [adminController::class, 'addMisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editMisi/{id}', [adminController::class, 'editMisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editMisi/proses', [adminController::class, 'editMisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editVisi', [adminController::class, 'editVisi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editVisi/proses', [adminController::class, 'editVisi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editSejarah', [adminController::class, 'editSejarah'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editSejarah/proses', [adminController::class, 'editSejarah_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusMisi/{id}', [adminController::class, 'hapusMisi'])->middleware(['auth', 'verified'])->name('dashboard');


//Organisasi
Route::get('/admin/organisasi', [adminController::class, 'organisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addOrganisasi', [adminController::class, 'addOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addOrganisasi_proses', [adminController::class, 'addOrganisasi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editOrganisasi/{id}', [adminController::class, 'editOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editOrganisasi_proses', [adminController::class, 'editOrganisasi_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusOrganisasi/{id}', [adminController::class, 'hapusOrganisasi'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('adminMenu');
})->middleware(['auth', 'verified'])->name('dashboard');

//Mahasiswa
Route::get('/admin/mahasiswa', [adminController::class, 'mahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addMahasiswa', [adminController::class, 'addMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addMahasiswa_proses', [adminController::class, 'addMahasiswa_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editMahasiswa/{id}', [adminController::class, 'editMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editMahasiswa_proses', [adminController::class, 'editMahasiswa_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusMahasiswa/{id}', [adminController::class, 'hapusMahasiswa'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
