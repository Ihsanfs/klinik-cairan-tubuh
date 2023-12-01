<?php

use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\KirimemailController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PertanyaanController;
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

// Route::get('/', function () {
//     return view('landing.inde');
// });
Route::get('/', [LandingController::class, 'index'])->name('beranda');
Route::get('/video', [LandingController::class, 'tampil'])->name('video');

Route::get('/question', [PertanyaanController::class, 'index'])->name('pertanyaan');
Route::post('/question/store', [PertanyaanController::class, 'store'])->name('store.pertanyaan');


Route::get('diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa');
Route::post('diagnosa', [DiagnosaController::class, 'diagnosasimpan'])->name('store.diagnosasimpan');
Route::get('diagnosa/hasil', [DiagnosaController::class, 'hasil'])->name('diagnosa.hasil');


Route::get('diagnosa/form', [DiagnosaController::class, 'diagnosa'])->name('form.diagnosa');
Route::get('diagnosa/caregive', [DiagnosaController::class, 'caregive'])->name('form.caregive');

Route::post('diagnosa/store', [DiagnosaController::class, 'store'])->name('store.diagnosa');
Route::post('diagnosa/store/caregive/', [DiagnosaController::class, 'simpan'])->name('store.caregive');




Route::get('suhu', [DiagnosaController::class, 'suhuid'])->name('suhu.diagnosa');
Route::post('suhu', [DiagnosaController::class, 'suhu'])->name('suhu.store');

Route::get('kirim', [KirimemailController::class, 'index']);
