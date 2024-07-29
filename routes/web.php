<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MakananController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\BerandaController;
use App\Http\Controllers\Web\HasilController;
use Faker\Provider\ar_JO\Address;
use Illuminate\Support\Facades\Route;

// Routing Halaman Depan
// Route::controller(AuthController::class)->group(function () {
// Route::get('login', 'login');
// });
// Route::prefix('/')->group(function () {
//     Route::redirect('/', 'beranda');
//     Route::controller(AuthController::class)->group(function () {
//         Route::get('login');
//     });
// });

Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginProcess']);

// Routing admin
Route::prefix('base')->group(function () {

    // Home controller
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index');
    });
    // Makanan Controller
    Route::controller(MakananController::class)->group(function () {
        Route::get('/makanan', 'index');
        Route::get('/makanan/create', 'create');
        Route::get('/makanan/{id}', 'show');
        Route::get('/makanan/{makanan}/edit', 'edit');
        Route::put('/makanan/{id}', 'update');
        Route::delete('/makanan/{id}', 'destroy');
        Route::post('/makanan/store', 'store');
    });
    Route::get('pengguna', [PenggunaController::class, 'index']);
    Route::post('pengguna', [PenggunaController::class, 'store']);
    Route::get('/pengguna/{id}', [PenggunaController::class, 'show']);
    // Route::get('hasil', [HasilController::class, 'index']);
});
Route::redirect('admin', 'base');

// Route::get('base', [AdminHomeController::class, 'base']);



Route::get('beranda', [BerandaController::class, 'beranda']);
Route::get('/', [BerandaController::class, 'beranda']);
Route::post('beranda', [BerandaController::class, 'store']);
// Route::get('beranda-hasil', [BerandaController::class, 'hasil']);
// Route::post('beranda/form', [BerandaController::class, 'form']);

Route::post('beranda/hasil', [HasilController::class, 'index']);

Route::get('base/user', [UserController::class, 'index']);
Route::post('base/user', [UserController::class, 'store']);
