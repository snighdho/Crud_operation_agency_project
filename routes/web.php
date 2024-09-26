<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactFormController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
Route::get('/contact/{id}/edit', [ContactFormController::class, 'edit'])->name('contact.edit');
Route::get('/contact/{id}', [ContactFormController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{id}', [ContactFormController::class, 'update'])->name('contact.update');
Route::delete('/contact/{id}', [ContactFormController::class, 'destroy'])->name('contact.destroy');
