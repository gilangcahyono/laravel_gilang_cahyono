<?php

use App\Http\Controllers\HospitalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Hello World',
        'app' => 'http://127.0.0.1:8000/hospitals'
    ], 200);
});

Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'authenticate']);

// Route::middleware('auth')->group(function () {
Route::resource('hospitals', HospitalController::class)->except('show');
Route::resource('patients', PatientController::class);
// });
