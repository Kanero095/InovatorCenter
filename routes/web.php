<?php

use App\Http\Controllers\InovasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/daftar-tim-inovasi', function () {
    return view('DaftarTim');
});

Route::resource('inovasi', InovasiController::class);
Route::get('/admin/create/inovasi/zero_$95', [InovasiController::class,'create'])->name('create');
Route::post('/', [InovasiController::class,'insert'])->name('insertAdmin');
