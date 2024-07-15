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

Route::get('event-inscription/payment/flooz', [PaymentController::class, 'flooz'])->name('payment.flooz');
Route::get('event-inscription/payment/t-money', [PaymentController::class, 'tMoney'])->name('payment.tMoney');
Route::get('event-inscription/payment/western-union', [PaymentController::class, 'payment.westernUnion'])->name('payment.westernUnion');
Route::get('event-inscription/payment/money-gram', [PaymentController::class, 'payment.moneyGram'])->name('payment.moneyGram');
Route::get('event-inscription/payment/cash', [PaymentController::class, 'cash'])->name('payment.cash');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/inscription/{id}', [DashboardController::class, 'inscriptionDetails'])->name('inscription.details');

require __DIR__.'/auth.php';
