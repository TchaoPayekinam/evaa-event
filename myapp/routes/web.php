<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('services', [App\Http\Controllers\HomeController::class, 'services'])->name('home.services');

require __DIR__.'/auth.php';
