<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormUndanganController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/login')->group(function(){
    Route::get('/',[AdminController::class,'login'])->name('login.index');
    Route::post('/check',[AdminController::class,'check'])->name('login.check');
});

Route::prefix('/formundangan')->group(function(){
Route::get('/',[FormUndanganController::class,'FormUndangan'])->name('formundangan.index');
});