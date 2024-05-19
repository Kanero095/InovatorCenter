<?php

use App\Http\Controllers\BackendController;
use App\Models\inovasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InovasiController;

Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', function () {
    return view('home');
});

// Innovation teams
Route::get('/innovation-teams', [InovasiController::class,'index']);
Route::get('innovation/read/{id}', [InovasiController::class,'read'])->name('innovation.read');
Route::get('/admin/create/inovasi_team/zero_inovator', [InovasiController::class,'create']);


// Backend
Route::post('/admin/create/inovasi_team/zero_inovator', [BackendController::class,'insert'])->name('insertAdmin');
Route::post('/admin/create/inovasi_list/zero_inovator',[BackendController::class,'insert2'])->name('insertAdmin2');

// Innovation List
Route::get('/innovations',[InovasiController::class,'index_inno']);
Route::get('/admin/create/inovasi_list/zero_inovator', [InovasiController::class,'create_innovation']);

Route::get('/home', [InovasiController::class,'smallIndex_inno']);
