<?php

use App\Http\Controllers\Api\PresensiApiController;
use App\Http\Controllers\Api\SubstituteTeacherApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('presensis', PresensiApiController::class);
Route::apiResource('substitutes', SubstituteTeacherApiController::class);

// Route::get('presensis', [PresensiApiController::class, 'index']);
// Route::get('presensis/{id}', [PresensiApiController::class, 'show']);
// Route::post('presensis', [PresensiApiController::class, 'store']);
// Route::put('presensis/{id}', [PresensiApiController::class, 'update']);
// Route::delete('presensis/{id}', [PresensiApiController::class, 'destroy']);