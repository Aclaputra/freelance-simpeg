<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDashboardController;
use App\Http\Controllers\PejabatPenilaiDashboardController;
use App\Http\Controllers\PenilaianKinerjaAktivitasController;
use App\Http\Controllers\PenilaianKinerjaIKUController;
use App\Http\Controllers\PenilaianKinerjaRealisasiController;
use App\Http\Controllers\PenilaianKinerjaPerilakuController;
use App\Http\Controllers\PenilaianKinerjaIKIController;
use App\Http\Controllers\PenilaianKinerjaIKPController;
use App\Http\Controllers\AtasanPejabatPenilaiDashboardController;

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

Route::get('/', function () {
    return view('landing');
});

// pegawai routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('dashboard', PegawaiDashboardController::class)
    ->name('index', 'dashboard');

// pejabat penilai routes
Route::get('/pejabat_penilai/dashboard', function () {
    return view('pejabat_penilai.dashboard');
})->middleware(['auth:pejabat_penilai'])->name('pejabat_penilai.dashboard');

require __DIR__.'/pejabatpenilaiauth.php';

Route::resource('pejabat_penilai/dashboard', PejabatPenilaiDashboardController::class)
    ->name('index', 'pejabat_penilai.dashboard')
    ->name('create', 'pejabat_penilai.create')
    ->name('store', 'pejabat_penilai.store')
    ->name('show', 'pejabat_penilai.show')
    ->name('edit', 'pejabat_penilai.edit')
    ->name('update', 'pejabat_penilai.update')
    ->name('destroy', 'pejabat_penilai.destroy');

/**
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas/{aktivitas}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas/{aktivitas}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas/{aktivitas}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/aktivitas/{aktivitas}      (DELETE)
 */
Route::resource('/pejabat_penilai/dashboard/komponen_penilaian_pekerjaan/aktivitas', PenilaianKinerjaAktivitasController::class)
    ->name('index', 'penilaian.aktivitas.dashboard')
    ->name('create', 'penilaian.aktivitas.create')
    ->name('store', 'penilaian.aktivitas.store')
    ->name('show', 'penilaian.aktivitas.show')
    ->name('edit', 'penilaian.aktivitas.edit')
    ->name('update', 'penilaian.aktivitas.update')
    ->name('destroy', 'penilaian.aktivitas.destroy');

/**
 * /dashboard/komponen_penilaian_pekerjaan/iku            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iku/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iku            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/iku/{iku}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iku/{iku}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iku/{iku}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/iku/{iku}      (DELETE)
 */
Route::resource('/pejabat_penilai/dashboard/komponen_penilaian_pekerjaan/iku', PenilaianKinerjaIKUController::class)
    ->name('index', 'penilaian.iku.dashboard')
    ->name('create', 'penilaian.iku.create')
    ->name('store', 'penilaian.iku.store')
    ->name('show', 'penilaian.iku.show')
    ->name('edit', 'penilaian.iku.edit')
    ->name('update', 'penilaian.iku.update')
    ->name('destroy', 'penilaian.iku.destroy');

/**
 * /dashboard/komponen_penilaian_pekerjaan/realisasi            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/realisasi/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/realisasi            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/realisasi/{realisasi}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/realisasi/{realisasi}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/realisasi/{realisasi}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/realisasi/{realisasi}      (DELETE)
 */
Route::resource('/pejabat_penilai/dashboard/komponen_penilaian_pekerjaan/realisasi', PenilaianKinerjaRealisasiController::class)
->name('index', 'penilaian.realisasi.dashboard')
->name('create', 'penilaian.realisasi.create')
->name('store', 'penilaian.realisasi.store')
->name('show', 'penilaian.realisasi.show')
->name('edit', 'penilaian.realisasi.edit')
->name('update', 'penilaian.realisasi.update')
->name('destroy', 'penilaian.realisasi.destroy');

/**
 * /dashboard/komponen_penilaian_pekerjaan/perilaku            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/perilaku/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/perilaku            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/perilaku/{perilaku}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/perilaku/{perilaku}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/perilaku/{perilaku}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/perilaku/{perilaku}      (DELETE)
 */
Route::resource('/pejabat_penilai/dashboard/komponen_penilaian_pekerjaan/perilaku', PenilaianKinerjaPerilakuController::class)
    ->name('index', 'penilaian.perilaku.dashboard')
    ->name('create', 'penilaian.perilaku.create')
    ->name('store', 'penilaian.perilaku.store')
    ->name('show', 'penilaian.perilaku.show')
    ->name('edit', 'penilaian.perilaku.edit')
    ->name('update', 'penilaian.perilaku.update')
    ->name('destroy', 'penilaian.perilaku.destroy');

/**
 * /dashboard/komponen_penilaian_pekerjaan/iki            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iki/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iki            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/iki/{iki}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iki/{iki}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/iki/{iki}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/iki/{iki}      (DELETE)
 */
Route::resource('/pejabat_penilai/dashboard/komponen_penilaian_pekerjaan/iki', PenilaianKinerjaIKIController::class)
    ->name('index', 'penilaian.iki.dashboard')
    ->name('create', 'penilaian.iki.create')
    ->name('store', 'penilaian.iki.store')
    ->name('show', 'penilaian.iki.show')
    ->name('edit', 'penilaian.iki.edit')
    ->name('update', 'penilaian.iki.update')
    ->name('destroy', 'penilaian.iki.destroy');

/**
 * /dashboard/komponen_penilaian_pekerjaan/ikp            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/ikp/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/ikp            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/ikp/{ikp}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/ikp/{ikp}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/ikp/{ikp}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/ikp/{ikp}      (DELETE)
 */
Route::resource('/pejabat_penilai/dashboard/komponen_penilaian_pekerjaan/ikp', PenilaianKinerjaIKPController::class)
    ->name('index', 'penilaian.ikp.dashboard')
    ->name('create', 'penilaian.ikp.create')
    ->name('store', 'penilaian.ikp.store')
    ->name('show', 'penilaian.ikp.show')
    ->name('edit', 'penilaian.ikp.edit')
    ->name('update', 'penilaian.ikp.update')
    ->name('destroy', 'penilaian.ikp.destroy');


// atasan pejabat penilai routes
Route::get('/atasan_pejabat_penilai/dashboard', function () {
    return view('atasan_pejabat_penilai.dashboard');
})->middleware(['auth:atasan_pejabat_penilai'])->name('atasan_pejabat_penilai.dashboard');

require __DIR__.'/atasanpejabatpenilaiauth.php';

Route::resource('atasan_pejabat_penilai/dashboard', AtasanPejabatPenilaiDashboardController::class)
    ->name('index', 'atasan_pejabat_penilai.dashboard')
    ->name('create', 'atasan_pejabat_penilai.create')
    ->name('store', 'atasan_pejabat_penilai.store')
    ->name('show', 'atasan_pejabat_penilai.show')
    ->name('edit', 'atasan_pejabat_penilai.edit')
    ->name('update', 'atasan_pejabat_penilai.update')
    ->name('destroy', 'atasan_pejabat_penilai.destroy');


Route::get('/kepala_urusan_kepegawaian/dashboard', function () {
    return view('kepala_urusan_kepegawaian.dashboard');
})->middleware(['auth:kepala_urusan_kepegawaian'])->name('kepala_urusan_kepegawaian.dashboard');

require __DIR__.'/kepalaurusankepegawaianauth.php';

Route::get('/coba', function () {
    return view('coba');
});
