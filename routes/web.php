<?php

use App\Http\Controllers\PresensiController;
use App\Http\Controllers\RescheduleController;
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

Route::get('/create-reschedule', function () {
    return view('reschedule.create');
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

// UI Routes Re-schedule
Route::get('reschedule', [RescheduleController::class, 'index']);
Route::post('reschedule', [RescheduleController::class, 'store']);
Route::get('reschedule/{id}', [RescheduleController::class, 'edit']);
Route::put('reschedule/{id}', [RescheduleController::class, 'update']);
Route::delete('reschedule/{id}', [RescheduleController::class, 'destroy']);