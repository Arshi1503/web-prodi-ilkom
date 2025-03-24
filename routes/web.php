<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\VisiMisiTujuanController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\DosenStaffController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\JadwalPenerimaanController;
use App\Http\Controllers\PersyaratanMasukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/', [BerandaController::class, 'index']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/tentang', [TentangController::class, 'index']);

Route::get('/visi-misi-tujuan', function () {
    return view('visi-misi-tujuan');
});

Route::get('/visi-misi-tujuan', [VisiMisiTujuanController::class, 'index']);

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index']);

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/fasilitas', [KampusController::class, 'index']);

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/dosen', [DosenStaffController::class, 'index']);

Route::get('/akreditasi', function () {
    return view('akreditasi');
});

Route::get('/akreditasi', [AkreditasiController::class, 'index']);

Route::get('/karir', function () {
    return view('karir');
});

Route::get('/karir', [KarirController::class, 'index']);

Route::get('/kurikulum', function () {
    return view('kurikulum');
});

Route::get('/kurikulum', [AkademikController::class, 'index']);

Route::get('/profil-lulusan', function () {
    return view('profil-lulusan');
});

Route::get('/profil-lulusan', [ProfilLulusanController::class, 'index']);

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/artikel', [ArtikelController::class, 'index']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/kegiatan', [KegiatanController::class, 'index']);

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/jadwal-penerimaan', function () {
    return view('jadwal-penerimaan');
});

Route::get('/jadwal-penerimaan', [JadwalPenerimaanController::class, 'index']);

Route::get('/persyaratan-masuk', function () {
    return view('persyaratan-masuk');
});

Route::get('/persyaratan-masuk', [PersyaratanMasukController::class, 'index']);

Route::get('/biaya', function () {
    return view('biaya');
});

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

Route::get('/detail-fasilitas', function () {
    return view('detail-fasilitas');
});

Route::get('/detail-fasilitas/{id}', [KampusController::class, 'show'])->name('detail-fasilitas');

Route::get('/detail-dosen', function () {
    return view('detail-dosen');
});

Route::get('/detail-dosen/{id}', [DosenStaffController::class, 'show'])->name('detail-dosen');

Route::get('/detail-kata-sambutan', function () {
    return view('detail-kata-sambutan');
});

Route::get('/detail-kata-sambutan/{id}', [DosenStaffController::class, 'showDetail'])->name('pimpinanStaff.showDetail');

Route::get('/detail-artikel', function () {
    return view('detail-artikel');
});

Route::get('/detail-artikel/{id}', [ArtikelController::class, 'show'])->name('detail-artikel');

Route::get('/detail-berita', function () {
    return view('detail-berita');
});

Route::get('/detail-berita/{id}', [BeritaController::class, 'show'])->name('detail-berita');

Route::get('/detail-kegiatan', function () {
    return view('detail-kegiatan');
});

Route::get('/detail-kegiatan/{id}', [KegiatanController::class, 'show'])->name('detail-kegiatan');