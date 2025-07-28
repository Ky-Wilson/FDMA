<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnnonceController;
use App\Models\Annonce;




Route::get('/', function () {
    return view('site.bienvenue');
});


// Route::get('/', function () {
//     $annonces = Annonce::latest()->get();
//     return view('site.bienvenue', compact('annonces'));
// });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
// });

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');

    // CRUD annonces
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('admin.annonces.index');
    Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('admin.annonces.create');
    Route::post('/annonces', [AnnonceController::class, 'store'])->name('admin.annonces.store');
    Route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('admin.annonces.show');
    Route::get('/annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('admin.annonces.edit');
    Route::put('/annonces/{id}', [AnnonceController::class, 'update'])->name('admin.annonces.update');
    Route::delete('/annonces/{id}', [AnnonceController::class, 'destroy'])->name('admin.annonces.destroy');
});

// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/annonces', [AnnonceController::class, 'index'])->name('admin.annonces.index');
//     Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('admin.annonces.create');
//     Route::post('/annonces', [AnnonceController::class, 'store'])->name('admin.annonces.store');
//     Route::get('/annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('admin.annonces.edit');
//     Route::put('/annonces/{id}', [AnnonceController::class, 'update'])->name('admin.annonces.update');
//     Route::delete('/annonces/{id}', [AnnonceController::class, 'destroy'])->name('admin.annonces.destroy');
// });

