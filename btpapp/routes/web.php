<?php

use App\Models\Annonce;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\bController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ContactController;



// Route::get('/', function () {
//     return view('site.bienvenue');
// });

Route::get('/', [bController::class, 'index'])->name('site.bienvenue');
Route::get('/annonces', [HomeController::class, 'annonces'])->name('annonces.index');
Route::get('/annonces/{id}', [HomeController::class, 'voir'])->name('annonces.show');

Route::get('/contact-info', [HomeController::class, 'contact'])->name('site.contact');
// Route::get('/contact', [HomeController::class, 'contact'])->name('site.contact');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/a-propos', [HomeController::class, 'apropos'])->name('site.apropos');
Route::get('/projets', [HomeController::class, 'projets'])->name('site.projets');
Route::prefix('projets')->group(function () {

Route::get('/{id}', [HomeController::class, 'show'])->name('site.projets.show');
        Route::get('/{id}', [HomeController::class, 'show'])->name('site.projets.show');
});

Route::get('/services', [HomeController::class, 'services'])->name('site.services');


Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [App\Http\Controllers\AnnonceController::class, 'adminDashboard'])->name('admin.index');

    // CRUD annonces
    Route::get('/annonces', [AnnonceController::class, 'index'])->name('admin.annonces.index');
    Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('admin.annonces.create');
    Route::post('/annonces', [AnnonceController::class, 'store'])->name('admin.annonces.store');
    Route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('admin.annonces.show');
    Route::get('/annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('admin.annonces.edit');
    Route::put('/annonces/{id}', [AnnonceController::class, 'update'])->name('admin.annonces.update');
    Route::delete('/annonces/{id}', [AnnonceController::class, 'destroy'])->name('admin.annonces.destroy');
// Routes for projects
Route::get('/projets', [ProjetController::class, 'index'])->name('admin.projets.index');
Route::get('/projets/create', [ProjetController::class, 'create'])->name('admin.projets.create');
Route::post('/projets', [ProjetController::class, 'store'])->name('admin.projets.store');
Route::get('/projets/{id}', [ProjetController::class, 'show'])->name('admin.projets.show');
Route::get('/projets/{id}/edit', [ProjetController::class, 'edit'])->name('admin.projets.edit');
Route::put('/projets/{id}', [ProjetController::class, 'update'])->name('admin.projets.update');
Route::delete('/projets/{id}', [ProjetController::class, 'destroy'])->name('admin.projets.destroy');
});
