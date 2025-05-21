<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaurController;
use App\Http\Controllers\NyobaController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdmindaurController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controllers\CarbonFootprintController;
use App\Http\Controllers\EdukasiDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

Route::resource('laporan', LaporanController::class);

    
Route::resource('/', DaurController::class);
Route::resource('admin', AdmindaurController::class);
Route::resource('langkah', DaurController::class);

Route::get('/sesi', [SessionController::class, 'index']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::post('/sesi/login', [SessionController::class, 'login']);


Route::get('/carbon', [CarbonFootprintController::class, 'index'])->name('carbon.index');
Route::post('/calculate', [CarbonFootprintController::class, 'calculate'])->name('carbon.calculate');
Route::get('/result', [CarbonFootprintController::class, 'result'])->name('carbon.result');

// Route::get('edukasi', [EdukasiController::class, 'index']);
// Route::get('edukasi/{id}', [EdukasiController::class, 'show']);

Route::resource('edukasi', EdukasiController::class);

Route::resource('edukasiDashboard', EdukasiDashboardController::class);


//batagor
Route::get('/nyoba', [NyobaController::class, 'index']);
Route::get('/nyoba/pengguna', [NyobaController::class, 'batagor']);

route::get('kirim-email', [KirimEmailController::class, 'index'])->name('kirim-email.index');
route::post('kirim', [KirimEmailController::class, 'send'])->name('kirim.send');