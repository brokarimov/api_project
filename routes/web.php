<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LangChange;
use Illuminate\Support\Facades\Route;

// Route::get('', function () {
//     return view('welcome');
// });

Route::middleware(LangChange::class)->group(function () {
    // Routes that require authentication
    Route::middleware('auth')->group(function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/news', [NewsController::class, 'index']);

        Route::get('category-create', [CategoryController::class, 'create']);
        Route::post('category-store', [CategoryController::class, 'store']);

        Route::get('news-create', [NewsController::class, 'create']);
        Route::post('news-store', [NewsController::class, 'store']);

        Route::get('/logout', [AuthController::class, 'logout']);
    });

    // Public routes
    Route::get('lang/{lang}', [LangController::class, 'lang']);
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerPage']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/verify', [AuthController::class, 'verifyPage']);
    Route::post('/verify', [AuthController::class, 'verify']);

    Route::get('userPage', [UserController::class, 'index']);
    Route::get('categoryFilter/{category}', [UserController::class, 'filter']);


});
