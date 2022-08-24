<?php

use App\Http\Controllers\Foxy\Home\DashboardController;
use App\Http\Controllers\Foxy\Home\Stakeholder\StakeholderController;
use App\Http\Controllers\Rino\Products\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['v_company']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::view('/profile', 'dashboard');
    });
    Route::prefix('foxi')->group(function () {
        Route::get('collaborators', [StakeholderController::class, 'show_collaborators'])->name('show_home_collaborators');
    });
    Route::prefix('rino')->group(function () {
        Route::get('products/{people}', [ProductController::class, 'show_home_products'])->name('show_home_products');
    });
});

require __DIR__ . '/auth.php';

Route::view('/terms', 'terms');
Route::view('/policy', 'policy');
