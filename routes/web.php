<?php

use App\Http\Controllers\PelangganController;
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

Route::get('/dashboard', [PelangganController::class, 'dashboard'])->name('dashboard');

Route::get('/pelanggan/datapelanggan', [PelangganController::class, 'index'])->name('pelanggan');

Route::get('/pelanggan/tambahpelanggan', [PelangganController::class, 'tambahpelanggan'])->name('tambahpelanggan');
Route::post('/pelanggan/insertpelanggan', [PelangganController::class, 'insertpelanggan'])->name('insertpelanggan');

Route::get('/pelanggan/tampilpelanggan/{id}', [PelangganController::class, 'tampilpelanggan'])->name('tampilpelanggan');
Route::post('/pelanggan/updatepelanggan/{id}', [PelangganController::class, 'updatepelanggan'])->name('updatepelanggan');

Route::get('/pelanggan/deletepelanggan/{id}', [PelangganController::class, 'deletepelanggan'])->name('deletepelanggan');

// Export PDF
Route::get('/pelanggan/exportpdf', [PelangganController::class, 'exportpdf'])->name('exportpdf');

// Export Excel
Route::get('/pelanggan/exportexcel', [PelangganController::class, 'exportexcel'])->name('exportexcel');

// // Import Excel
// Route::post('/pelanggan/importexcel', [PelangganController::class, 'importexcel'])->name('importexcel');
