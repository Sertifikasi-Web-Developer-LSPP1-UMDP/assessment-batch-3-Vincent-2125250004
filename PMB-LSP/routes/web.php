<?php

use App\Http\Controllers\CreatePendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserVerifyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('pengumuman', PengumumanController::class);
    Route::get('/dashboard', function () {
        return view('admin/adminDashboard');
    })->name('dashboardAdmin');
    Route::resource('pendaftaran', PendaftaranController::class)->except(['index', 'store', 'create']);
    Route::resource('pengumuman', PengumumanController::class)->except(['index']);
    Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
    Route::get('/verifyUser', [UserVerifyController::class, 'index'])->name('verifyUser.index');
    Route::put('/verifyUser/{id}', [UserVerifyController::class, 'update'])->name('verifyUser.update');
    Route::get('/verifyUser/{id}', [UserVerifyController::class, 'edit'])->name('verifyUser.edit'); // Ditambahkan
});


// Frontend Routes
Route::middleware(['auth'])->group(function () {
    Route::get('pendaftaran', function (Request $request) {
        return view('frontend.pendaftaran.pendaftaran');
    })->name('page.pendaftaran');
});

// User Routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/pendaftaran/create/{jalur?}', [CreatePendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran/store', [CreatePendaftaranController::class, 'store'])->name('pendaftaran.store');
});

require __DIR__ . '/auth.php';
