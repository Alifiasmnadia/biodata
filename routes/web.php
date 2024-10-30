<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute Tanpa MVC
Route::get('/rutetanpamvc', function () {
  return 'welcome';
});

//Rute Menggunakan VIEW
Route::get('/ruteview', function () {
  return view('ruteview');
});


//Rute Menggunakan View dan Controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);


//Rute Menggunakan View, controller & Model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);

//Rute Biodata
Route::get('/biodata', [ BiodataController::class, 'menampilkanBiodata']);