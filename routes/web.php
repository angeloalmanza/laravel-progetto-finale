<?php

use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\VideogameController;
use App\Http\Controllers\ProfileController;
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

Route::resource("videogames", VideogameController::class)
    ->middleware(['auth', 'verified']);

Route::resource("platforms", PlatformController::class)
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
