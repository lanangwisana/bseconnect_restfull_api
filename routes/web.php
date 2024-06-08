<?php

use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// UI Routes (tanpa class)
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/create-presensi', function () {
    return view('presensi.create');
});

Route::get('/create-substitute', function () {
    return view('substituteteacher.create');
});


// UI Routes
Route::get('presensi', [PresensiController::class, 'index']);
Route::post('presensi', [PresensiController::class, 'store']);
Route::get('presensi/{id}', [PresensiController::class, 'edit']);
Route::put('presensi/{id}', [PresensiController::class, 'update']);
Route::delete('presensi/{id}', [PresensiController::class, 'destroy']);