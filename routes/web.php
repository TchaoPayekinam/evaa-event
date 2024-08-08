<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;

/**
 * route used to switch locale
 */
Route::get('lang/{lang}', [App\Http\Controllers\LocalizationController::class, 'switchLang'])->name('switchLang');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('services', [App\Http\Controllers\HomeController::class, 'services'])->name('home.services');

Route::post('submit-contact-form', [ContactController::class, 'submit'])->name('post_contact_form');
Route::post('subscribe-to-newsletter', [ContactController::class, 'subscribe_to_newsletter'])->name('subscribe_to_newsletter');

Route::get('event/inscription', [InscriptionController::class, 'inscription'])->name('event.inscription');
Route::post('/inscription', [InscriptionController::class, 'submit'])->name('inscription.submit');

Route::get('event/inscription/flooz', [App\Http\Controllers\HomeController::class, 'flooz'])->name('inscription.flooz');
Route::get('event/inscription/t-money', [App\Http\Controllers\HomeController::class, 'tMoney'])->name('inscription.tMoney');
Route::get('event/inscription/western-union', [App\Http\Controllers\HomeController::class, 'westernUnion'])->name('inscription.westernUnion');
Route::get('event/inscription/money-gram', [App\Http\Controllers\HomeController::class, 'moneyGram'])->name('inscription.moneyGram');
Route::get('event/inscription/cash', [App\Http\Controllers\HomeController::class, 'cash'])->name('inscription.cash');

Route::get('event/payment/flooz', [App\Http\Controllers\HomeController::class, 'flooz'])->name('payment.flooz');
Route::get('event/payment/t-money', [App\Http\Controllers\HomeController::class, 'tMoney'])->name('payment.tMoney');
Route::get('event/payment/western-union', [App\Http\Controllers\HomeController::class, 'westernUnion'])->name('payment.westernUnion');
Route::get('event/payment/money-gram', [App\Http\Controllers\HomeController::class, 'moneyGram'])->name('payment.moneyGram');
Route::get('event/payment/cash', [App\Http\Controllers\HomeController::class, 'cash'])->name('payment.cash');

Route::get('event/payment', [PaymentController::class,'payment'])->name('payment');
Route::post('event/payment', [PaymentController::class,'submit'])->name('payment.submit');

Route::middleware(['auth'])->group(function () {
    Route::middleware('verified')->group(function () {
        // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Route::get('my-registrations', [DashboardController::class, 'registrations'])->name('user.registrations');
        // Route::get('my-payments', [DashboardController::class, 'payments'])->name('user.payments');
        // Route::get('pending-payment-input/{id}', [DashboardController::class, 'paymentDetailsSubmissionForm'])->name('paymentDetailsSubmissionForm');
        // Route::post('pending-payment-input/{id}', [DashboardController::class, 'postPaymentDetailsSubmissionForm']);

        // Route::get('event/{id}/payment-training-costs', [PaymentController::class, 'trainingCostsPayment'])->name('event.trainingCostsPayment');
        // Route::post('event/{id}/payment-training-costs', [PaymentController::class, 'postTrainingCostsPayment']);
    });
        // -----------------------
        // -----------------------
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('my-registrations', [DashboardController::class, 'registrations'])->name('user.registrations');
        Route::get('my-payments', [DashboardController::class, 'payments'])->name('user.payments');
        Route::get('pending-payment-input/{id}', [DashboardController::class, 'paymentDetailsSubmissionForm'])->name('paymentDetailsSubmissionForm');
        Route::post('pending-payment-input/{id}', [DashboardController::class, 'postPaymentDetailsSubmissionForm']);

        Route::get('event/{id}/payment-training-costs', [PaymentController::class, 'trainingCostsPayment'])->name('event.trainingCostsPayment');
        Route::post('event/{id}/payment-training-costs', [PaymentController::class, 'postTrainingCostsPayment']);
        // --------------------------
        // --------------------------

    Route::get('/inscription/{id}', [DashboardController::class, 'inscriptionDetails'])->name('inscription.details');
    Route::post('/inscription/{id}/confirm', [DashboardController::class, 'confirmInscription'])->name('inscription.confirm');
});

Route::get('/payment/{id}', [DashboardController::class, 'paymentDetails'])->name('payment.details');
Route::post('/payment/{id}/confirm', [DashboardController::class, 'confirmPayment'])->name('payment.confirm');

Route::get('event/payment/receipt/{id}', [DashboardController::class, 'generate_receipt'])->name('payment.receipt');

///// Administration Routes /////
Route::get('adminLogin&EECO@2024', [App\Http\Controllers\Admin\Auth\LoginController::class, 'adminLoginForm'])->name('admin.login');
Route::post('adminLogin&EECO@2024', [App\Http\Controllers\Admin\Auth\LoginController::class, 'doLogin']);
Route::delete('adminLogin&EECO@2024', [App\Http\Controllers\Admin\Auth\LoginController::class, 'destroy'])->name('admin.logout');

Route::middleware('admin.auth')->group(function () {
    Route::get('/administration/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/administration/payments', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('admin.payments');
    Route::get('/administration/transactions', [App\Http\Controllers\Admin\PaymentController::class, 'transactions'])->name('admin.transactions');
    Route::post('payment/confirm_transaction/{id}', [App\Http\Controllers\Admin\PaymentController::class, 'confirm_transaction'])->name('payment.confirm_transaction');
    Route::post('payment/confirm_transaction_reset/{id}', [App\Http\Controllers\Admin\PaymentController::class, 'confirm_transaction_reset'])->name('payment.confirm_transaction_reset');

    Route::resource('profiles', App\Http\Controllers\Admin\ProfileController::class);
    Route::resource('admins', App\Http\Controllers\Admin\ManageAdminController::class);
    /// ++++
    Route::put('/administration/update-administrator/{id}', [App\Http\Controllers\Admin\ManageAdminController::class, 'update'])->name('manageAdmin.update');



    Route::get('/administration/evenement', [App\Http\Controllers\Admin\EvenementController::class, 'index'])->name('evenement.index');
    Route::get('/administration/evenement/createForm', [App\Http\Controllers\Admin\EvenementController::class, 'createForm'])->name('evenement.createForm');
    Route::post('/administration/evenement/create', [App\Http\Controllers\Admin\EvenementController::class, 'create'])->name('evenement.create');
    Route::get('/administration/evenement/{id}/modifier', [\App\Http\Controllers\Admin\EvenementController::class, 'edit'])->name('evenement.edit');
    Route::put('/administration/evenement/{id}', [\App\Http\Controllers\Admin\EvenementController::class, 'update'])->name('evenement.update');
    Route::delete('/administration/evenement/{id}', [\App\Http\Controllers\Admin\EvenementController::class, 'destroy'])->name('evenement.destroy');

    Route::get('/administration/payement-inscription', [App\Http\Controllers\Admin\PayementController::class, 'inscriptionList'])->name('payement.inscription');
    Route::put('/administration/payement/inscription-validation/{id}', [App\Http\Controllers\Admin\PayementController::class, 'validateInscription'])->name('inscription.validate');
    Route::put('/administration/payement/inscription-validation-reset/{id}', [App\Http\Controllers\Admin\PayementController::class, 'validateInscriptionReset'])->name('inscription.validateReset');
    Route::get('/administration/payement/inscription-search', [App\Http\Controllers\Admin\PayementController::class, 'searchInscription'])->name('inscription.search');

    Route::get('/administration/payement-formation', [App\Http\Controllers\Admin\PayementController::class, 'formationList'])->name('payement.formation');
    Route::put('/administration/payement/formation-validation/{id}', [App\Http\Controllers\Admin\PayementController::class, 'validateFormation'])->name('formation.validate');
    Route::put('/administration/payement/formation-validation-reset/{id}', [App\Http\Controllers\Admin\PayementController::class, 'validateFormationReset'])->name('formation.validateReset');
    Route::get('/administration/payement/formation-search', [App\Http\Controllers\Admin\PayementController::class, 'searchFormation'])->name('formation.search');

    Route::get('/administration/gestion-admin', [App\Http\Controllers\ManageAdminController::class, 'index'])->name('manageAdmin.index');
    Route::get('/administration/create-administrators', [App\Http\Controllers\ManageAdminController::class, 'createForm'])->name('manageAdmin.createForm');
    Route::post('/administration/create-administrator', [App\Http\Controllers\ManageAdminController::class, 'create'])->name('manageAdmin.create');
    Route::get('/administration/edit-administrators/{id}', [App\Http\Controllers\ManageAdminController::class, 'edit'])->name('manageAdmin.edit');
    // Route::put('/administration/update-administrator/{id}', [App\Http\Controllers\ManageAdminController::class, 'update'])->name('manageAdmin.update');
    Route::get('/administration/edit-password', [App\Http\Controllers\ManageAdminController::class, 'editPassword'])->name('manageAdmin.editPassword');
    Route::put('/administration/update-password/{id}', [App\Http\Controllers\ManageAdminController::class, 'updatePassword'])->name('manageAdmin.updatePassword');
    Route::delete('/administration/delete-administrator/{id}', [App\Http\Controllers\ManageAdminController::class, 'destroy'])->name('manageAdmin.destroy');
    Route::get('/administration/search-administrator', [App\Http\Controllers\ManageAdminController::class, 'search'])->name('manageAdmin.search');
});

require __DIR__.'/auth.php';