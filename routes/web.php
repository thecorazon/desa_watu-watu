<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaDesaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\GaleriDesaController;
use App\Http\Controllers\KegiatanDesaController;
use App\Http\Controllers\PetaDesaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\ProfilKepalaDesaController;
use App\Http\Controllers\ProfilPerangkatDesaController;
use App\Http\Controllers\SejarahDesaController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [AppController::class, 'index'])->name('home');

// Profil Desa
Route::get('/profil-desa', [ProfilDesaController::class, 'show'])->name('profilDesa');

// Sejarah Desa
Route::get('/profil-desa/sejarah-desa', [SejarahDesaController::class, 'show'])->name('sejarahDesa');

// Visi Misi
Route::get('/profil-desa/visi-misi', [VisiMisiController::class, 'show'])->name('visiMisiDesa');

// Struktur Organisasi
Route::get('/profil-desa/struktur-organisasi', [StrukturOrganisasiController::class, 'show'])->name('strukturOrganisasi');

// Profil Kepala Desa
Route::get('/profil-desa/profil-kepala-desa', [ProfilKepalaDesaController::class, 'show'])->name('profilKepalaDesa');

// Profil Perangkat Desa
Route::get('/profil-desa/profil-perangkat-desa', [ProfilPerangkatDesaController::class, 'show'])->name('profilPerangkatDesa');

// Peta Desa
Route::get('/profil-desa/peta-desa', [PetaDesaController::class, 'show'])->name('petaDesa');

// Berita Desa
Route::get('/berita-desa', [BeritaDesaController::class, 'show'])->name('beritaDesa');
Route::get('/berita-desa/{slug}', [BeritaDesaController::class, 'showBerita'])->name('detailBerita');
Route::get('/berita/cari', [BeritaDesaController::class, 'search'])->name('cariBerita');

// Galeri Desa
Route::get('/galeri', [GaleriDesaController::class, 'show'])->name('galeri');

// Kontak
Route::get('/kontak', [AppController::class, 'kontak'])->name('kontak');

// Kegiatan Desa
Route::get('/kegiatan-desa', [KegiatanDesaController::class, 'show'])->name('kegiatanDesa');

// Login Admin
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Visi dan Misi Admin
Route::get('/dashboard/visi-misi', [VisiMisiController::class, 'showAdmin'])->middleware('auth')->name('visiMisiAdmin');
Route::post('/dashboard/visi-misi', [VisiMisiController::class, 'update'])->middleware('auth')->name('editVisiMisi');

// Profil Desa Admin
Route::get('/dashboard/profil-desa', [ProfilDesaController::class, 'index'])->middleware('auth')->name('profilDesaAdmin');
Route::post('/dashboard/profil-desa', [ProfilDesaController::class, 'update'])->middleware('auth')->name('editDataProfilDesa');

// Sejarah Desa Admin
Route::get('/dashboard/sejarah-desa', [SejarahDesaController::class, 'index'])->middleware('auth')->name('sejarahDesaAdmin');
Route::post('/dashboard/sejarah-desa', [SejarahDesaController::class, 'update'])->middleware('auth')->name('editDataSejarahDesa');

// Struktur Organisasi Admin
Route::get('/dashboard/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->middleware('auth')->name('strukturOrganisasiAdmin');
Route::post('/dashboard/struktur-organisasi', [StrukturOrganisasiController::class, 'update'])->middleware('auth')->name('editStrukturOrganisasi');

// Profil Kepala Desa Admin
Route::get('/dashboard/profil-kepala-desa', [ProfilKepalaDesaController::class, 'index'])->middleware('auth')->name('profilKepalaDesaAdmin');
Route::post('/dashboard/profil-kepala-desa', [ProfilKepalaDesaController::class, 'update'])->middleware('auth')->name('editProfilKepalaDesa');

// Profil Perangkat Desa Admin
Route::controller(GaleriDesaController::class)->prefix('/dashboard')->group(function () {
    Route::get('/profil-perangkat-desa', 'index')->name('profilPerangkatDesaAdmin');
    Route::get('/tambah-profil-perangkat-desa', 'create')->name('tambahProfilPerangkatDesaAdmin');
    Route::post('/tambah-profil-perangkat-desa', 'store')->name('tambahProfilPerangkatDesaAdmin');
    Route::get('/edit-profil-perangkat-desa/{id}', 'edit')->name('editProfilPerangkatDesaAdmin');
    Route::post('/edit-profil-perangkat-desa/{id}', 'update')->name('editProfilPerangkatDesaAdmin');
    Route::post('/hapus-profil-perangkat-desa/{id}', 'destroy')->name('hapusProfilPerangkatDesaAdmin');
    Route::get('/tampil-profil-perangkat-desa/{id}', 'tampilDataPerangkatDesa')->name('tampilProfilPerangkatDesaAdmin');
     
})->middleware("auth");


// Peta Desa Admin
Route::get('/dashboard/peta-desa', [PetaDesaController::class, 'index'])->middleware("auth")->name('petaDesaAdmin');
Route::post('/dashboard/peta-desa/edit-peta-desa', [PetaDesaController::class, 'update'])->middleware('auth')->name('editPetaDesaAdmin');

// Galeri Desa Admin
Route::controller(GaleriDesaController::class)->prefix('/dashboard')->group(function () {
    Route::get('/galeri-desa',  'index')->name('galeriDesaAdmin');
    Route::get('/tambah-galeri-desa',  'create')->name('tambahGaleriDesaAdmin');
    Route::post('/tambah-galeri-desa',  'store')->name('tambahGaleriDesaAdmin');
    Route::get('/edit-galeri-desa/{id}',  'edit')->name('editGaleriDesaAdmin');
    Route::post('/edit-galeri-desa/{id}',  'update')->name('editGaleriDesaAdmin');
    Route::post('/hapus-galeri-desa/{id}',  'destroy')->name('hapusGaleriDesaAdmin');
})->middleware("auth");

// Kegiatan Desa Admin
Route::controller(KegiatanDesaController::class)->prefix("/dashboard")->group(function () {
    Route::get('/kegiatan-desa', 'index')->name('kegiatanDesaAdmin');
    Route::get('/tambah-kegiatan-desa', 'create')->name('tambahKegiatanDesaAdmin');
    Route::post('/tambah-kegiatan-desa',  'store')->name('tambahKegiatanDesaAdmin');
    Route::get('/edit-kegiatan-desa/{id}', 'edit')->name('editKegiatanDesaAdmin');
    Route::post('/edit-kegiatan-desa/{id}', 'update')->name('editKegiatanDesaAdmin');
    Route::post('/hapus-kegiatan-desa/{id}', 'destroy')->name('hapusKegiatanDesaAdmin');
})->middleware("auth");


// Berita Desa Admin
Route::controller(BeritaDesaController::class)->prefix("/dashboard")->group(function () {
    Route::get('/berita-desa', 'index')->name('beritaDesaAdmin');
    Route::get('/tambah-berita-desa', 'create')->name('tambahBeritaDesaAdmin');
    Route::post('/tambah-berita-desa', 'store')->name('tambahBeritaDesaAdmin');
    Route::get('/edit-berita-desa/{id}', 'edit')->name('editBeritaDesaAdmin');
    Route::post('/edit-berita-desa/{id}', 'update')->name('editBeritaDesaAdmin');
    Route::post('/hapus-berita-desa/{id}', 'destroy')->name('hapusBeritaDesaAdmin');
    Route::get('/berita-desa/{slug}', 'detail')->name('tampilBeritaDesa');
})->middleware('auth');


// Data Penduduk
Route::controller(DataPendudukController::class)->prefix("/dashboard")->group(function () {
    Route::get('/data-penduduk',  'index')->middleware('auth')->name('dataPendudukAdmin');
    Route::get('/tambah-data-penduduk',  'create')->name('tambahDataPendudukAdmin');
    Route::post('/tambah-data-penduduk',  'store')->name('tambahDataPendudukAdmin');
    Route::get('/edit-data-penduduk/{id}',  'edit')->name('editDataPendudukAdmin');
    Route::post('/edit-data-penduduk/{id}',  'update')->name('editDataPendudukAdmin');
    Route::post('/hapus-data-penduduk/{id}',  'destroy')->name('hapusDataPendudukAdmin');
})->middleware('auth');


// Generate Sitemap
Route::get('/genSet', [AppController::class, 'generateSitemap']);
