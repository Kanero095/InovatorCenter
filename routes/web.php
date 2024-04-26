<?php

use App\Models\inovasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

// Inovasi
Route::post('/', [InovasiController::class,'insert'])->name('insertAdmin');
Route::get('/innovation-list', [InovasiController::class,'index']);
// Iovasi - create
Route::get('/admin/create/inovasi/zero_$95', [InovasiController::class,'create'])->name('create');

// Route::get('/home', [PageController::class, 'home']);
// Route::get('/daftar-tim-inovasi', [PageController::class, 'inovasi']);

