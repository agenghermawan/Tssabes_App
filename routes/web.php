<?php

use App\Http\Controllers\Admin\HomeController;
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

// Admin
