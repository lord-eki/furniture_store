<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FurnitureController;


Route::controller(MainController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/faqs','faqs');
});

Route::resource('furnitures', FurnitureController::class);


Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
