<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AuthController;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('wishlist/{wishlist}', [WishlistController::class, 'index'])->name('wishlist');
