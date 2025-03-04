<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\AdminController;
use App\Livewire\HouseListings;
use App\Livewire\CreateListing;
use App\Livewire\MediaManager;
use Livewire\Livewire;


Route::get('/', function () {
    return view('welcome');
});


    // Route::get('/home', [HouseController::class, 'index'])->name('home');

Route::get('/home', HouseListings::class);
Route::get('/new-listing', CreateListing::class);
Route::get('/add-images', MediaManager::class);

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
