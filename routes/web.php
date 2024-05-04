<?php

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


Route::group(['prefix' => 'mahasiswa'], function () {
    Route::get('/', [\App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/create', [\App\Http\Controllers\MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/store', [\App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/{id}/delete', [\App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});
