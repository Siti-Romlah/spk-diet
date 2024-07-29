<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MakananController;
use App\Http\Controllers\Admin\PenggunaController;

// Route::prefix('admin')
Route::resource('data-makanan', MakananController::class);
// Route::resource('pengguna', PenggunaController::class);
