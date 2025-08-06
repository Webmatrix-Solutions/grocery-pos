<?php

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
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/add-new-product', function() {
        return view('products.create-product');
    })->name('add-new-product');

    Route::get('/manage-stocks', function() {
        return view('stocks.all-stocks');
    })->name('manage-stocks');

    Route::get('/manage-pos', function() {
        return view('products.manage-pos');
    })->name('manage-pos');

    Route::get('/manage-cashiers', function() {
        return view('products.manage-cashiers');
    })->name('manage-cashiers');
});


require __DIR__ . '/auth.php';
