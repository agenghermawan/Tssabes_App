<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\User\HomeController as UserHomeController;
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

// User
Route::get('/', [FrontendController::class, 'home'])->name('Home');
Route::get('/profile',[FrontendController::class, 'profile'])->name('Profile');
Route::get('/tentang-kami',[FrontendController::class, 'tentangKami'])->name('AboutMe');
Route::get('/tata-tertib',[FrontendController::class, 'rules'])->name('Rules');

Route::get('/prestasi',[FrontendController::class, 'prestasi'])->name('Prestasi');
Route::get('/daftar',[FrontendController::class,'register'])->name('Register');

Route::resource('/register', RegisterController::class);


// Admin
Route::get('/dashboard',[DashboardController::class,'index'])->name('Dashboard');
Route::get('/pendaftaran-baru',[\App\Http\Controllers\Admin\PendaftaranController::class , 'pendaftaranBaru'])->name('pendaftarn-baru');
Route::get('/pendaftaran-ulang',[\App\Http\Controllers\Admin\PendaftaranController::class , 'pendaftaranUlang'])->name('pendaftarn-ulang');

// Prestasi


Route::get('/admin/prestasi-sd',[PrestasiController::class, 'prestasiSD'])->name('prestasi-sd');
Route::get('/admin/prestasi-remaja',[PrestasiController::class, 'prestasiRemaja'])->name('prestasi-remaja');
Route::resource('/admin/prestasi', PrestasiController::class);
Route::resource('/admin/gallery', GalleryController::class);
