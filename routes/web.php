<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');
Route::post('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter.subscribe');
Route::get('/locale/{locale}', [HomeController::class, 'setLocale'])->name('locale.set');
