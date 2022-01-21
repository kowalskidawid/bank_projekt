<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::prefix('centrala')->group(function () {
        Route::get('', [\App\Http\Controllers\CentralOfficeController::class, 'index'])->name('central-office');
        Route::put('', [\App\Http\Controllers\CentralOfficeController::class, 'update'])->name('central-office.update');
    });

    Route::prefix('oddzialy')->group(function () {
        Route::get('', [\App\Http\Controllers\DepartmentsController::class, 'index'])->name('departments');
        Route::get('dodaj', [\App\Http\Controllers\DepartmentsController::class, 'create'])->name('departments.create');
        Route::post('', [\App\Http\Controllers\DepartmentsController::class, 'store'])->name('departments.store');
        Route::get('edytuj/{id}', [\App\Http\Controllers\DepartmentsController::class, 'edit'])->name('departments.edit');
        Route::put('{id}', [\App\Http\Controllers\DepartmentsController::class, 'update'])->name('departments.update');
        Route::get('usun/{id}', [\App\Http\Controllers\DepartmentsController::class, 'destroy'])->name('departments.delete');
    });

    Route::prefix('klienci')->group(function () {
        Route::get('', [\App\Http\Controllers\ClientsController::class, 'index'])->name('clients');
    });
    Route::get('', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware('guest')->group(function () {
    Route::prefix('rejestracja')->group(function () {
        Route::get('', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register');
        Route::post('', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register.request');
    });
    Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
});

