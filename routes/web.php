<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormUndanganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UndanganController;
use App\Models\pesanan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

Route::prefix('/formundangan')->group(function () {
    Route::get('/', [FormUndanganController::class, 'FormUndangan'])->name('formundangan.index');
});

/**
 * HALAMAN KHUSUS UNTUK ADMIN
 *  /admin
 */
Route::prefix('/admin')->group(function () {
    /**
     * HALAMAN LOGIN UNTUK ADMIN
     *  /admin/login
     */
    Route::prefix('/login')->group(function () {
        Route::get('/', [AdminController::class, 'login'])->name('login.index');
        Route::post('/check', [AdminController::class, 'check'])->name('login.check');
    });

    /**
     * HALAMAN DASHBOARD
     * /admin/dashboard
     */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    /**
     * HALAMAN TEMA
     * /admin/tema
     */
    Route::prefix('/tema')->group(function () {
        Route::get('/', [TemaController::class, 'index'])->name('tema.index');
        Route::get('/data', [TemaController::class, 'dataTema'])->name('tema.data');
        Route::get('/tambah', [TemaController::class, 'tambah'])->name('tema.tambah');
        Route::post('/simpan', [TemaController::class, 'simpan'])->name('tema.simpan');
        Route::post('/hapus', [TemaController::class, 'delete'])->name('tema.hapus');
        Route::get('/edit/{id_tema}', [TemaController::class, 'edit'])->name('tema.edit');

    });
    
    /**
     * HALAMAN PAKET
     * /admin/paket
     */
    Route::prefix('/paket')->group(function () {
        Route::get('/', [PaketController::class, 'index'])->name('paket.index');
        Route::get('/data', [PaketController::class, 'dataPaket'])->name('paket.data');
        Route::get('/tambah', [PaketController::class, 'tambah'])->name('paket.tambah');
        Route::post('/simpan', [PaketController::class, 'simpan'])->name('paket.simpan');
        Route::post('/hapus', [PaketController::class, 'delete'])->name('paket.hapus');
        Route::get('/edit/{id_paket}', [PaketController::class, 'edit'])->name('paket.edit');
    });

    /**
     * Halaman Pesanan
     * /admin/pesanan
     */
    Route::prefix('/pesanan')->group(function () {
        Route::get('/',[PesananController::class,'index'])->name('pesanan.index');
        Route::get('/data', [PesananController::class, 'dataPesanan'])->name('pesanan.data');
        Route::get('/tambah', [PesananController::class, 'tambah'])->name('pesanan.tambah');
    });
});


//undangan
Route::prefix('/undangan_digital-NikahYuk')->group(function () {
    Route::get('/', [UndanganController::class, 'index'])->name('undangan.index');
});
