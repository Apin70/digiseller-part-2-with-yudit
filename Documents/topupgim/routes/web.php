<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/auth/sign-in', [AuthController::class, 'signIn'])->name('auth.sign-in');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');

// Category
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

// Product
Route::get('/product/{slug}/{id}', [ProductController::class, 'show'])->name('product.show');

// Static pages
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');

// Order
Route::get('/order/pulsa', [OrderController::class, 'pulsa'])->name('order.pulsa');

// Featured
Route::get('/featured/pricings', [FeaturedController::class, 'pricings'])->name('featured.pricings');
Route::get('/featured/newsroom', [FeaturedController::class, 'newsroom'])->name('featured.newsroom');
Route::get('/featured/news-and-promotions', [FeaturedController::class, 'newsAndPromotions'])->name('featured.news-and-promotions');

// Purchase
Route::get('/purchase/recents', [PurchaseController::class, 'recents'])->name('purchase.recents');
Route::get('/purchase/order-status', [PurchaseController::class, 'orderStatus'])->name('purchase.order-status');

// Search
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Top Up Identity V
Route::get('/top-up-identity-v', function () {
    return view('top_up_identity_v');
})->name('top-up-identity-v');
