<?php

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/pejabat_penilai/dashboard', function () {
    return view('pejabat_penilai.dashboard');
})->middleware(['auth:pejabat_penilai'])->name('pejabat_penilai.dashboard');

require __DIR__.'/pejabatpenilaiauth.php';

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
