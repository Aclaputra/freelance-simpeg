<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDashboardController;
use App\Http\Controllers\PejabatPenilaiDashboardController;
use App\Http\Controllers\PenilaianKinerjaAktivitasController;
use App\Http\Controllers\PenilaianKinerjaIKUController;

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


// atasan pejabat penilai routes
Route::get('/atasan_pejabat_penilai/dashboard', function () {
    return view('atasan_pejabat_penilai.dashboard');
})->middleware(['auth:atasan_pejabat_penilai'])->name('atasan_pejabat_penilai.dashboard');

require __DIR__.'/atasanpejabatpenilaiauth.php';

Route::get('/kepala_urusan_kepegawaian/dashboard', function () {
    return view('kepala_urusan_kepegawaian.dashboard');
})->middleware(['auth:kepala_urusan_kepegawaian'])->name('kepala_urusan_kepegawaian.dashboard');

require __DIR__.'/kepalaurusankepegawaianauth.php';

Route::get('/coba', function () {
    return view('coba');
});
