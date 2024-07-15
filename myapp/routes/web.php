<?php

use App\Http\Controllers\DashboardController;
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
Route::get('event/inscription', [InscriptionController::class, 'inscription'])->name('event.inscription');
Route::post('/inscription', [InscriptionController::class, 'submit'])->name('inscription.submit');
Route::get('order-history', [InscriptionController::class, 'order_history'])->name('order_history');

Route::get('event/payment/flooz', [App\Http\Controllers\HomeController::class, 'flooz'])->name('payment.flooz');
Route::get('event/payment/t-money', [App\Http\Controllers\HomeController::class, 'tMoney'])->name('payment.tMoney');
Route::get('event/payment/western-union', [App\Http\Controllers\HomeController::class, 'westernUnion'])->name('payment.westernUnion');
Route::get('event/payment/money-gram', [App\Http\Controllers\HomeController::class, 'moneyGram'])->name('payment.moneyGram');
Route::get('event/payment/cash', [App\Http\Controllers\HomeController::class, 'cash'])->name('payment.cash');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/inscription/{id}', [DashboardController::class, 'inscriptionDetails'])->name('inscription.details');
Route::post('/inscription/{id}/confirm', [DashboardController::class, 'confirmInscription'])->name('inscription.confirm');
Route::get('/payment', [PaymentController::class,'payment'])->name('payment');
Route::post('/payment', [PaymentController::class,'submit'])->name('payment.submit');


require __DIR__.'/auth.php';
