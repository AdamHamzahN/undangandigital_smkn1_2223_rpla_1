<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\FormUndanganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PembayaranController;
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

//Form Undangan
Route::prefix('/formundangan')->group(function () {
    Route::get('/', [FormUndanganController::class, 'index'])->name('formundangan.index');
    Route::post('register', [FormUndanganController::class, 'register'])->name('formundangan.register');
    Route::post('register2', [FormUndanganController::class, 'register2'])->name('formundangan.register2');
    Route::post('register3', [FormUndanganController::class, 'register3'])->name('formundangan.register3');
    Route::post('register4', [FormUndanganController::class, 'register4'])->name('formundangan.register4');
    Route::post('tamu', [FormUndanganController::class, 'tamu'])->name('formundangan.tamu');
    Route::post('registertamu', [FormUndanganController::class, 'registertamu'])->name('formundangan.registertamu');
    Route::post('penutup', [FormUndanganController::class, 'penutup'])->name('formundangan.penutup');
});




/**
 * Halaman Login Admin
 * /login
 */
Route::prefix('/login')->group(function () {
    Route::get('/', [AdminLoginController::class, 'index'])->name('login');
    Route::post('/check', [AdminLoginController::class, 'check'])->name('login.check');
});
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

/**
 * HALAMAN KHUSUS UNTUK ADMIN
 *  /admin
 */
Route::prefix('/admin')->middleware('AdminMiddleware')->group(function () {
    /**
     * Halaman Dashboard
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
        Route::get('/', [PesananController::class, 'index'])->name('pesanan.index');
        Route::get('/data', [PesananController::class, 'dataPesanan'])->name('pesanan.data');
        Route::get('/tambahpemesan', [PesananController::class, 'tambahPemesan'])->name('pesanan.tambahpemesan');
        Route::post('/simpanpemesan', [PesananController::class, 'simpanPemesan'])->name('pesanan.simpanpemesan');
        Route::get('/tambahdetailundangan',[PesananController::class, 'tambahDetailUndangan'])->name('pesanan.tambahdetailundangan');
        Route::post('/simpandetailundangan', [PesananController::class, 'simpanDetailUndangan'])->name('pesanan.simpandetailundangan');
        Route::post('/hapus',[PesananController::class, 'delete'])->name('pesanan.delete');
        Route::get('/edit/{id_pesanan}',[PesananController::class, 'edit'])->name('pesanan.edit'); 
        Route::post('/update',[PesananController::class, 'update'])->name('pesanan.update');
        Route::get('/detailundangan/{id_undangan}',[PesananController::class, 'detailUndangan'])->name('pesanan.detailUndangan');
        
    });

    Route::prefix('/daftarpembayaran')->group(function () {
        Route::get('/',[PembayaranController::class,'index'])->name('pembayaran.index');
        Route::get('/data',[PembayaranController::class,'dataPembayaran'])->name('pembayaran.data');
        Route::get('/edit/{id_pembayaran}',[PembayaranController::class,'edit'])->name('pembayaran.edit');
        Route::post('/update',[PembayaranController::class,'update'])->name('pembayaran.update');
    });
    
});


//undangan
// http://localhost:8000/undangan_digital-NikahYuk?tamu=Bapak%20Jono
Route::prefix('/undangan_digital-NikahYuk')->group(function () {
    Route::get('/', [UndanganController::class, 'index'])->name('undangan.index');
});


// tes undangan Adam
Route::prefix('/undangan')->group(function () {
    Route::get('/{id_undangan}', [UndanganController::class, 'index2'])->name('undangan.index');
    Route::post('/kirimucapan', [UndanganController::class, 'kirimUcapan'])->name('undangan.kirimUcapan');
});