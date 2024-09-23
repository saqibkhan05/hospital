<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // specialist
    Route::prefix('/specialist')->name('specialist.')->group(function () {
        // C
        Route::get('/create', [SpecialistController::class, 'create'])->name('create');
        Route::post('/store', [SpecialistController::class, 'store'])->name('store');
        // R
        Route::get('/', [SpecialistController::class, 'index'])->name('index');
    });

    // disease
    Route::prefix('/disease')->name('disease.')->group(function () {
        // C
        Route::get('/create', [DiseaseController::class, 'create'])->name('create');
        Route::post('/store', [DiseaseController::class, 'store'])->name('store');
        // R
        Route::get('/', [DiseaseController::class, 'index'])->name('index');
    });

    // doctor
    Route::prefix('/doctor')->name('doctor.')->group(function () {
        // C
        Route::get('/create', [DoctorController::class, 'create'])->name('create');
        Route::post('/store', [DoctorController::class, 'store'])->name('store');
        // R
        Route::get('/', [DoctorController::class, 'index'])->name('index');
    });

    // Hospital
    Route::prefix('/hospital')->name('hospital.')->group(function () {
        // C
        Route::get('/create', [HospitalController::class, 'create'])->name('create');
        Route::post('/store', [HospitalController::class, 'store'])->name('store');
        // R
        Route::get('/', [HospitalController::class, 'index'])->name('index');
    });
});
