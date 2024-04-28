<?php

use App\Http\Controllers\BackendController;
use App\Models\inovasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InovasiController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

// Inovasi
Route::get('/innovation-list', [InovasiController::class,'index']);
Route::get('innovation/read/{id}', [InovasiController::class,'read'])->name('innovation.read');
Route::get('/admin/create/inovasi/zero_$95', [InovasiController::class,'create'])->name('create');

// Backend
Route::post('/', [BackendController::class,'insert'])->name('insertAdmin');

// Route::get('/home', [PageController::class, 'home']);
// Route::get('/daftar-tim-inovasi', [PageController::class, 'inovasi']);

