<?php

use App\Http\Controllers\{
    ProfileController,
    ControllerWebsite,
    ControllerBeranda,
    VisualizationController,
    ControllerSystemAuth,
    PariwisataController,
};
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama yang menampilkan welcome.blade.php
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk halaman web yang mengarah ke ControllerWebsite
Route::controller(ControllerWebsite::class)->group(function () {
    Route::get('/home', 'index')->name('web.index');
    Route::get('/dashboard/admin', 'dashboard')->name('dashboard.main');
});
Route::controller(ControllerBeranda::class)->group(function () {
    Route::get('/beranda', 'index')->name('beranda.index');
    Route::get('/beranda/add',  'add')->name('beranda.add');
    Route::get('/beranda/edit', 'edit')->name('beranda.edit');
});

// Route untuk halaman beranda yang mengarah ke ControllerBeranda
Route::get('/beranda', [ControllerBeranda::class, 'index'])->name('beranda.index');

// Route untuk halaman visualisasi yang mengarah ke VisualizationController
Route::controller(VisualizationController::class)->group(function () {
    Route::get('/visualisasi', 'index')->name('visualisasi.index');
    Route::get('/visualisasi/pariwisata', 'pariwisata')->name('visualisasi.pariwisata');
    Route::get('/visualisasi/kesehatan', 'kesehatan')->name('visualisasi.kesehatan');
    Route::get('/visualisasi/pendidikan', 'pendidikan')->name('visualisasi.pendidikan');
});

Route::get('/d', [ControllerSystemAuth::class, 'index']);
Route::post('/login', [ControllerSystemAuth::class, 'login']);


Route::group(['middleware' => ['SystemAuth']], function () {
});

// routes/web.php

Route::get('/pariwisata', [PariwisataController::class, 'index'])->name('pariwisata');

require __DIR__ . '/auth.php';
