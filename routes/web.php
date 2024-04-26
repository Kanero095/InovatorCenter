<?php

use App\Models\inovasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/daftar-tim-inovasi', function () {
//     $teams = inovasi::all();
//     return view('DaftarTim', compact('teams'));
// });

Route::resource('inovasi', InovasiController::class);
Route::get('/admin/create/inovasi/zero_$95', [InovasiController::class,'create'])->name('create');
Route::post('/', [InovasiController::class,'insert'])->name('insertAdmin');


Route::get('/home', [PageController::class, 'home']);
Route::get('/daftar-tim-inovasi', [PageController::class, 'inovasi']);

