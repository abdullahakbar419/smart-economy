<?php

use App\Http\Controllers\AlgoritmaC50Controller;
use App\Models\Pakar;
use App\Http\Controllers\RController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\MPEController;
use App\Http\Controllers\PakarController;
use App\Http\Controllers\PembobotanController;
use App\Http\Controllers\UmkmController;
use App\Models\AlgoritmaC50;

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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    $pakars = Pakar::pluck('flag')->unique();
    $c50s = AlgoritmaC50::all();
    $algoritmaC50 = session('algoritmaC50');

    return view('contents.dashboard', compact('pakars', 'c50s', 'algoritmaC50'));
})->name('dashboard');

Route::get('classification/maps', [ClassificationController::class, 'maps'])->name('classification.maps');

Route::get('classification/c50/create', [ClassificationController::class, 'createC50'])->name('classification.c50.create');
Route::post('classification/c50/store', [ClassificationController::class, 'storeC50'])->name('classification.c50.store');
Route::post('classification/c50/R', [RController::class, 'runRScript'])->name('classification.c50.R');
Route::post('classification/mpe', [ClassificationController::class, 'mpe'])->name('classification.mpe');
Route::get('umkm', [UmkmController::class, 'index'])->name('umkm');

Route::post('pembobotan/pakar', [PembobotanController::class, 'pembobotanPakar'])->name('pembobotan.pakar');
Route::post('pembobotan/desa', [PembobotanController::class, 'pembobotanDesa'])->name('pembobotan.desa.store');

Route::resource('village', VillageController::class);
Route::resource('pakar', PakarController::class);
Route::resource('algoritmaC50', AlgoritmaC50Controller::class);
Route::resource('mpe', MPEController::class);
