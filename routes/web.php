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
Route::post('store-master-barang', [BarangController::class, 'store'])->name('master-barang.store');
Route::post('master-barang-destroy/{id}', [BarangController::class, 'destroy'])->name('master-barang.destroy');
Route::get('master-barang-edit/{id}', [BarangController::class, 'edit'])->name('master-barang.edit');
Route::post('master-barang-update', [BarangController::class, 'update'])->name('master-barang.update');

//BARANG MASUK
Route::get('barang-masuk', [BarangMasukController::class, 'index'])->name('barang-masuk');
Route::post('store-barang-masuk', [BarangMasukController::class, 'store'])->name('barang-masuk.store');
Route::post('barang-masuk-destroy/{id}', [BarangMasukController::class, 'destroy'])->name('barang-masuk.destroy');
Route::get('barang-masuk-edit/{id}', [BarangMasukController::class, 'edit'])->name('barang-masuk.edit');
Route::post('barang-masuk-update', [BarangMasukController::class, 'update'])->name('barang-masuk.update');

//BARANG KELUAR
Route::get('barang-keluar', [BarangKeluarController::class, 'index'])->name('barang-keluar');
Route::post('store-barang-keluar', [BarangKeluarController::class, 'store'])->name('barang-keluar.store');
Route::post('barang-keluar-destroy/{id}', [BarangKeluarController::class, 'destroy'])->name('barang-keluar.destroy');
Route::get('barang-keluar-edit/{id}', [BarangKeluarController::class, 'edit'])->name('barang-keluar.edit');
Route::post('barang-keluar-update', [BarangKeluarController::class, 'update'])->name('barang-keluar.update');

//NASABAH
Route::get('nasabah', [NasabahController::class, 'index'])->name('nasabah');
Route::post('store-nasabah', [NasabahController::class, 'store'])->name('nasabah.store');
Route::post('nasabah-destroy', [NasabahController::class, 'destroy'])->name('nasabah.destroy');
Route::get('nasabah-edit/{id}', [NasabahController::class, 'edit'])->name('nasabah.edit');
Route::post('nasabah-update/', [NasabahController::class, 'update'])->name('nasabah.update');

//OPERASIONAL
Route::get('ops', [OpsController::class, 'index'])->name('ops');
Route::post('ops-store', [OpsController::class, 'store'])->name('ops.store');
Route::post('ops-destroy/{id}', [OpsController::class, 'destroy'])->name('ops.destroy');
Route::get('ops-edit/{id}', [OpsController::class, 'edit'])->name('ops.edit');
Route::post('ops-update/', [OpsController::class, 'update'])->name('ops.update');

//KATEGORI BARANG
Route::get('kategori-barang', [KategoriBarangController::class, 'index'])->name('kategori-barang');
Route::post('store-kategori-barang', [KategoriBarangController::class, 'store'])->name('store-kategori-barang');
Route::post('kategori-barang-destroy/{id}', [KategoriBarangController::class, 'destroy'])->name('kategori.destroy');
Route::get('kategori-barang-edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit');
Route::post('update-kategori-barang/', [KategoriBarangController::class, 'update'])->name('kategori.update');

//KATEGORI PEMBIAYAAN
Route::get('kategori-pembiayaan', [KategoriPembiayaanController::class, 'index'])->name('kategori-pembiayaan');
Route::post('store-kategori-pembiayaan', [KategoriPembiayaanController::class, 'store'])->name('store-kategori-pembiayaan');
Route::post('kategori-pembiayaan-destroy/{id}', [KategoriPembiayaanController::class, 'destroy'])->name('kategori-pembiayaan.destroy');
Route::get('kategori-pembiayaan-edit/{id}', [KategoriPembiayaanController::class, 'edit'])->name('kategori-pembiayaan.edit');
Route::post('update-kategori-pembiayaan/', [KategoriPembiayaanController::class, 'update'])->name('kategori-pembiayaan.update');