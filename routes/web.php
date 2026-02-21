<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'landing')->name('home');

/*
|--------------------------------------------------------------------------
| Authenticated & Verified Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::view('/digital', 'pages.digital')->name('digital');
Route::view('/comunidade', 'pages.comunidade')->name('comunidade');
Route::view('/loja', 'pages.loja')->name('loja');
Route::view('/fivem', 'pages.fivem')->name('fivem');

/*
|--------------------------------------------------------------------------
| Authentication Routes (Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

