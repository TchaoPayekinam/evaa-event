<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PaymentController;

/**
 * route used to switch locale
 */
Route::get('lang/{lang}', [App\Http\Controllers\LocalizationController::class, 'switchLang'])->name('switchLang');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('services', [App\Http\Controllers\HomeController::class, 'services'])->name('home.services');

Route::post('submit-contact-form', [ContactController::class, 'submit'])->name('post_contact_form');
Route::get('/inscription', [InscriptionController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'submit'])->name('inscription.submit');

Route::get('/flooz', [PaymentController::class, 'flooz'])->name('flooz');
Route::get('/t-money', [PaymentController::class, 'tMoney'])->name('tMoney');
Route::get('/western-union', [PaymentController::class, 'westernUnion'])->name('westernUnion');
Route::get('/money-gram', [PaymentController::class, 'moneyGram'])->name('moneyGram');
Route::get('/cash', [PaymentController::class, 'cash'])->name('cash');


require __DIR__.'/auth.php';
