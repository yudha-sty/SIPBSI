<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\OpsController;
use App\Http\Controllers\KategoriPembiayaanController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\NasabahController;

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

Route::get('home', [UserController::class, 'index'])->name('home');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//MASTER BARANG
Route::get('master-barang', [BarangController::class, 'index'])->name('master-barang');

//BARANG MASUK
Route::get('barang-masuk', [BarangMasukController::class, 'index'])->name('barang-masuk');

//BARANG KELUAR
Route::get('barang-keluar', [BarangKeluarController::class, 'index'])->name('barang-keluar');

//NASABAH
Route::get('nasabah', [NasabahController::class, 'index'])->name('nasabah');

//OPERASIONAL
Route::get('ops', [OpsController::class, 'index'])->name('ops');

//KATEGORI BARANG
Route::get('kategori-barang', [KategoriBarangController::class, 'index'])->name('kategori-barang');
Route::post('store-kategori-barang', [KategoriBarangController::class, 'store'])->name('store-kategori-barang');
Route::post('kategori-barang-destroy/{id}', [KategoriBarangController::class, 'destroy'])->name('kategori.destroy');
Route::get('kategori-barang-edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit');

//KATEGORI PEMBIAYAAN
Route::get('kategori-pembiayaan', [KategoriPembiayaanController::class, 'index'])->name('kategori-pembiayaan');