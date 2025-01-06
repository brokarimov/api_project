<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Check;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify', [AuthController::class, 'verify']);

// Profile
Route::post('profile', [AuthController::class, 'profile'])->middleware('auth:sanctum');

// Password
Route::post('password', [AuthController::class, 'password']);

// Category
Route::get('/category', [CategoryController::class, 'index'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::get('/category/{category}', [CategoryController::class, 'show'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::post('/category', [CategoryController::class, 'store'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::delete('/category/{category}', [CategoryController::class, 'delete'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::put('/category/{category}', [CategoryController::class, 'update'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);

// News
Route::get('/news', [NewsController::class, 'index'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::get('/news/{new}', [NewsController::class, 'show'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::post('/news', [NewsController::class, 'store'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::delete('/news/{new}', [NewsController::class, 'delete'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);
Route::put('/news/{new}', [NewsController::class, 'update'])->middleware(['App\Http\Middleware\Check:admin', 'auth:sanctum']);



