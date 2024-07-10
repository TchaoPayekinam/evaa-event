<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\InscriptionController;
use Illuminate\Support\Facades\Route;

/**
 * route used to switch locale
 */
Route::get('lang/{lang}', [App\Http\Controllers\LocalizationController::class, 'switchLang'])->name('switchLang');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('services', [App\Http\Controllers\HomeController::class, 'services'])->name('home.services');

Route::post('submit-contact-form', [ContactController::class, 'submit'])->name('post_contact_form');
Route::get('inscription', [InscriptionController::class, 'inscription'])->name('user.inscription');

require __DIR__.'/auth.php';
