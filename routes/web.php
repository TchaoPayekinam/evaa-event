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
// Route::get('/recherche', [\App\Http\Controllers\NavireController::class, 'search'])->name('search');

require __DIR__.'/auth.php';
