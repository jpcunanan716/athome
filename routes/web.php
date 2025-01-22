<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HouseController::class, 'home'])->name('home');
Route::get('/listing', [HouseController::class, 'listing'])->name('listing');
Route::post('/home', [HouseController::class, 'save'])->name('save');

//admin routes
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware(['auth', 'admin']);

//laravel breeze login routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
