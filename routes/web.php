<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SuplierController,
    PembeliController,
    PembelianController,
    PenjualanController
};

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
    return view('home');
});

//route barang
Route::resource('/barang', BarangController::class);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::get('/barang/{id}/hapus', [BarangController::class, 'destroy']);

//route kategori
Route::resource('/kategori', KategoriController::class);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

//route Supplier
Route::resource('/suplier', SuplierController::class);
Route::get('/suplier/{id}/edit', [SuplierController::class, 'edit']);
Route::get('/suplier/{id}/hapus', [SuplierController::class, 'destroy']);

//route Pembeli
Route::resource('/pembeli',PembeliController::class);
Route::get('/pembeli/{id}/hapus', [PembeliController::class, 'destroy']);
Route::get('/pembeli/{id}/edit', [PembeliController::class, 'edit']);

//Route Pembelian
Route::resource('/pembelian', PembelianController::class);
Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'destroy']);

//Route penjualan
Route::resource('/penjualan', PenjualanController::class);
Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'edit']);
Route::get('/penjualan/hapus/{id}', [PenjualanController::class, 'destroy']);



