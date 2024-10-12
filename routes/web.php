<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [adminController::class, 'dashboard'])->name('dashboard');
    Route::get('add', [adminController::class, 'add'])->name('add');
    Route::post('store', [adminController::class, 'store'])->name('store');
    Route::get('view/{id}', [adminController::class, 'view'])->name('view');
    Route::get('edit/{id}', [adminController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [adminController::class, 'update'])->name('update');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\adminController::class, 'index'])->name('home');
