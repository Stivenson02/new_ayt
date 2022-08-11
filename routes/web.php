<?php

use App\Http\Controllers\Foxy\Home\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['v_company']], function (){
        Route::get('/dashboard',  [DashboardController::class, 'index']);
        Route::view('/profile', 'dashboard');
    });

});

require __DIR__.'/auth.php';

Route::view('/terms', 'terms');
Route::view('/policy', 'policy');
