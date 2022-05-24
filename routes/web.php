<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\PinjamanController;


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

//public function edit(mahasiswa $mahasiswa)
    {
        //$data = mahasiswa::find($mahasiswa);

      // return view('tambah', compact('data'));
    }

Route::get('/', function () {
    return view('welcome');
});
//mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
Route::put('mahasiswa/ganti/{id}', [MahasiswaController::class, 'ganti'])->name('mahasiswa.ganti');


//admin
Route::resource('admin', AdminController::class);
Route::put('admin/ganti/{id}', [AdminController::class, 'ganti'])->name('admin.ganti');


//buku
Route::resource('buku', BukuController::class);
Route::put('buku/ganti/{id}', [BukuController::class, 'ganti'])->name('buku.ganti');

//jurnal
Route::resource('jurnal', JurnalController::class);
Route::put('jurnal/ganti/{id}', [JurnalController::class, 'ganti'])->name('jurnal.ganti');


//karya ilmiah
Route::resource('karya', KaryaController::class);
Route::put('karya/ganti/{id}', [KaryaController::class, 'ganti'])->name('karya.ganti');
//pinjaman
Route::resource('pinjaman', PinjamanController::class);
Route::put('pinjaman/ganti/{id}', [PinjamanController::class, 'ganti'])->name('pinjaman.ganti');

