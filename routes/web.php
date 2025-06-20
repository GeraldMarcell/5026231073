<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\ObatDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\PageCounterDBController;
use App\Http\Controllers\NewKaryawanDBController;

// konsepnya kayak import java.io;

// System.out.println("Hello World)";
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('pertemuan1', function () {
    return view('pertama');
});

Route::get('pertemuan3/bootstrap', function () {
    return view('bootstrap1');
});

Route::get('pertemuan3/list', function () {
    return view('indexlist');
});

Route::get('pertemuan3/indexpage1', function () {
    return view('indexpage1');
});

Route::get('pertemuan3/indexpage2', function () {
    return view('indexpage2');
});

Route::get('pertemuan3/indexpage3', function () {
    return view('indexpage3');
});

Route::get('pertemuan3/indexpage4', function () {
    return view('indexpage4');
});

Route::get('pertemuan4', function () {
    return view('handson1');
});

Route::get('pertemuan6', function () {
    return view('indexlinktree');
});

Route::get('pertemuan7/javascript', function () {
    return view('js1');
});

Route::get('pertemuan7/validasi', function () {
    return view('validasi1');
});

Route::get('pertemuan8/ets', function () {
    return view('index');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route obatDB
Route::get('/obat', [ObatDBController::class, 'index']);
Route::get('/obat/tambah', [ObatDBController::class, 'tambah']);
Route::post('/obat/store', [ObatDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/obat/edit/{id}',[ObatDBController::class, 'edit']);
Route::post('/obat/update',[ObatDBController::class, 'update']);
Route::get('/obat/hapus/{id}', [ObatDBController::class, 'hapus']);

Route::get('/obat/cari', [ObatDBController::class, 'cari']);

//route karyawanDB
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);

//route PageCounterDB
Route::get('/latihan1', [PageCounterDBController::class, 'index']);

//route newkaryawanDB
Route::get('/eas', [NewKaryawanDBController::class, 'index']);
Route::get('/eas/tambah', [NewKaryawanDBController::class, 'tambah']);
Route::post('/eas/store', [NewKaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/eas/hapus/{id}', [NewKaryawanDBController::class, 'hapus']);
