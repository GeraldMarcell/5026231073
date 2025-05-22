<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
