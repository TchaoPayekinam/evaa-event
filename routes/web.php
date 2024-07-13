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
Route::get('events', [App\Http\Controllers\HomeController::class, 'myEvent'])->name('home.myEvent');

Route::post('submit-contact-form', [ContactController::class, 'submit'])->name('post_contact_form');
Route::get('event/inscription', [InscriptionController::class, 'inscription'])->name('event.inscription');
Route::post('/inscription', [InscriptionController::class, 'submit'])->name('inscription.submit');
Route::get('order-history', [InscriptionController::class, 'order_history'])->name('order_history');

Route::get('event-inscription/payment/flooz', [PaymentController::class, 'flooz'])->name('payment.flooz');
Route::get('event-inscription/payment/t-money', [PaymentController::class, 'tMoney'])->name('payment.tMoney');
Route::get('event-inscription/payment/western-union', [PaymentController::class, 'payment.westernUnion'])->name('westernUnion');
Route::get('event-inscription/payment/money-gram', [PaymentController::class, 'payment.moneyGram'])->name('moneyGram');
Route::get('event-inscription/payment/cash', [PaymentController::class, 'cash'])->name('payment.cash');

Route::get('/administration/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/administration/evenement', [App\Http\Controllers\EvenementController::class, 'index'])->name('evenement.index');
Route::get('/administration/evenement/createForm', [App\Http\Controllers\EvenementController::class, 'createForm'])->name('evenement.createForm');
Route::post('/administration/evenement/create', [App\Http\Controllers\EvenementController::class, 'create'])->name('evenement.create');
Route::get('/administration/evenement/{id}/modifier', [\App\Http\Controllers\EvenementController::class, 'edit'])->name('evenement.edit');
Route::put('/administration/evenement/{id}', [\App\Http\Controllers\EvenementController::class, 'update'])->name('evenement.update');
Route::delete('/administration/evenement/{id}', [\App\Http\Controllers\EvenementController::class, 'destroy'])->name('evenement.destroy');

Route::get('/administration/payement', [App\Http\Controllers\PayementController::class, 'index'])->name('payement.index');
Route::get('/administration/payement/createForm', [App\Http\Controllers\PayementController::class, 'createForm'])->name('payement.createForm');
Route::post('/administration/payement/create', [App\Http\Controllers\PayementController::class, 'create'])->name('payement.create');
Route::get('/administration/payement/{id}/modifier', [\App\Http\Controllers\PayementController::class, 'edit'])->name('payement.edit');
Route::put('/administration/payement/{id}', [\App\Http\Controllers\PayementController::class, 'update'])->name('payement.update');
Route::delete('/administration/payement/{id}', [\App\Http\Controllers\PayementController::class, 'destroy'])->name('payement.destroy');

require __DIR__.'/auth.php';
