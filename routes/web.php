<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PesertaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
    return ['Laravel' => app()->version()];
});


Route::middleware('auth')->group(function (){
    // Admin
    Route::get('/',[DashboardController::class,'index'])->name('Dashboard');
    Route::get('/pendaftaran-baru',[\App\Http\Controllers\Admin\PendaftaranController::class , 'pendaftaranBaru'])->name('pendaftarn-baru');
    Route::get('/pendaftaran-ulang',[\App\Http\Controllers\Admin\PendaftaranController::class , 'pendaftaranUlang'])->name('pendaftarn-ulang');
    
    // Prestasi
    
    Route::get('/admin/prestasi-sd',[PrestasiController::class, 'prestasiSD'])->name('prestasi-sd');
    Route::get('/admin/prestasi-remaja',[PrestasiController::class, 'prestasiRemaja'])->name('prestasi-remaja');
    Route::resource('/admin/prestasi', PrestasiController::class);
    Route::resource('/admin/gallery', GalleryController::class);
    
    Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/statistic/{IdPeserta}', [PesertaController::class, 'statistic'])->name('statistic');
    
    Route::get('/peserta/statistik', [PesertaController::class, 'create'])->name('peserta.create');
    Route::post('/peserta/statistik',[PesertaController::class,'store'])->name('statistik.store');
});

require __DIR__.'/auth.php';
