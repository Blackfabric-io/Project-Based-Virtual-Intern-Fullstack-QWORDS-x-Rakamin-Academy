<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageManagementController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('signup');

// Dynamic Page Routes
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');

// Product Routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{slug}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/category/{category}', [ProductController::class, 'category'])->name('products.category');
});

// Service Routes
Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/category/{category}', [ServiceController::class, 'category'])->name('services.category');
});

// Contact Routes
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Page Management
    Route::prefix('pages')->group(function () {
        Route::get('/', [PageManagementController::class, 'index'])->name('admin.pages.index');
        Route::get('/create', [PageManagementController::class, 'create'])->name('admin.pages.create');
        Route::post('/store', [PageManagementController::class, 'store'])->name('admin.pages.store');
        Route::get('/{page}/edit', [PageManagementController::class, 'edit'])->name('admin.pages.edit');
        Route::put('/{page}', [PageManagementController::class, 'update'])->name('admin.pages.update');
        Route::delete('/{page}', [PageManagementController::class, 'destroy'])->name('admin.pages.destroy');
    });

    // Product Management
    Route::resource('products', 'Admin\ProductManagementController');

    // Service Management
    Route::resource('services', 'Admin\ServiceManagementController');
});
