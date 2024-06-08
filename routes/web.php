<?php

use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SubstituteController;
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


// UI Routes Presensi
Route::get('presensi', [PresensiController::class, 'index']);
Route::post('presensi', [PresensiController::class, 'store']);
Route::get('presensi/{id}', [PresensiController::class, 'edit']);
Route::put('presensi/{id}', [PresensiController::class, 'update']);
Route::delete('presensi/{id}', [PresensiController::class, 'destroy']);

// UI Routes Substitute Teacher
Route::get('substitute', [SubstituteController::class, 'index']);
Route::post('substitute', [SubstituteController::class, 'store']);
Route::get('substitute/{id}', [SubstituteController::class, 'edit']);
Route::put('substitute/{id}', [SubstituteController::class, 'update']);
Route::delete('substitute/{id}', [SubstituteController::class, 'destroy']);