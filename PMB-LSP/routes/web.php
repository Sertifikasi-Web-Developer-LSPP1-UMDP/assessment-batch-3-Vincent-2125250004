<?php

use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserVerificationController;
use App\Http\Controllers\UserVerifyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::resource('pengumuman', PengumumanController::class);
    Route::get('/dashboardAdmin', function () {
        return view('admin/adminDashboard');
    })->name('dashboardAdmin');
    Route::resource('pendaftaran', PendaftaranController::class)->except(['index','update']);
    Route::put('/pendaftaran/{id}', [PendaftaranController::class, 'update'])->name('pendaftaran.update');
    Route::get('/verifyUser', [UserVerifyController::class, 'index'])->name('verifyUser.index');
    Route::put('/verifyUser/{id}', [UserVerifyController::class, 'update'])->name('verifyUser.update');

});

Route::middleware(['auth'])->group(function () {
    Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
});

Route::middleware(['auth','role:user'])->group(function () {
    // Route::get('pendaftaran', PendaftaranController::class);
});

require __DIR__.'/auth.php';
