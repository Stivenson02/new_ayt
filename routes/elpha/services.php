<?php


use \App\Http\Controllers\Elpha\Services\ServicesController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('elpha')->group(function (){
        Route::get('home/{people}',  [ServicesController::class, 'show_home_services'])->name('home_elpha_services');
    });
});


