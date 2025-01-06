<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
// use App\Http\Controllers\UserAdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/gudang', GudangController::class);
Route::resource('/pelanggan', PelangganController::class);
Route::resource('/pemasok', PemasokController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/stok', StokController::class);
Route::resource('/transaksi', TransaksiController::class);

// Gudang
Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');
Route::get('/gudang/create', [GudangController::class, 'create'])->name('gudang.create');
Route::post('/gudang', [GudangController::class, 'store'])->name('gudang.store');
Route::get('/gudang/{id}/edit', [GudangController::class, 'edit'])->name('gudang.edit');
Route::put('/gudang/{id}', [GudangController::class, 'update'])->name('gudang.update');
Route::delete('/gudang/{id}', [GudangController::class, 'destroy'])->name('gudang.destroy');

// Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

// Pemasok
Route::get('/pemasok', [PemasokController::class, 'index'])->name('pemasok.index');
Route::get('/pemasok/create', [PemasokController::class, 'create'])->name('pemasok.create');
Route::post('/pemasok', [PemasokController::class, 'store'])->name('pemasok.store');
Route::get('/pemasok/{id}/edit', [PemasokController::class, 'edit'])->name('pemasok.edit');
Route::put('/pemasok/{id}', [PemasokController::class, 'update'])->name('pemasok.update');
Route::delete('/pemasok/{id}', [PemasokController::class, 'destroy'])->name('pemasok.destroy');

// Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// Stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');
Route::get('/stok/{id}/edit', [StokController::class, 'edit'])->name('stok.edit');
Route::put('/stok/{id}', [StokController::class, 'update'])->name('stok.update');
Route::delete('/stok/{id}', [StokController::class, 'destroy'])->name('stok.destroy');

// Transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

require __DIR__.'/auth.php';
