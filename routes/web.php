<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
