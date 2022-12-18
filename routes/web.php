<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataPeminjamanController;

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
    return view('auth/login');
});

Route::resource('/Mahasiswa',MahasiswaController::class)->middleware('auth');
Route::resource('/DataBarang',DataBarangController::class)->middleware('auth');
Route::resource('/datapeminjaman',DataPeminjamanController::class)->middleware('auth');

Auth::routes();



Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('home', \App\Http\Controllers\HomeController::class)->middleware('auth');

