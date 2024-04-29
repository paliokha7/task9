<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;



Route::prefix('/auth')->name('auth.')->group(function() {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth:sanctum')->prefix('/users')->name('users.')->group(function () {
    Route::get('/me', [UserController::class, 'getCurrentUser'])->name('me');
    Route::get('/categories', [UserController::class, 'getUserCategories'])->name('categories');
    Route::get('/categories/{category}/products', [UserController::class, 'getCategoryProducts'])->name('category.products');
});