<?php


use \App\Http\Controllers\Elpha\Services\ServicesController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('elpha')->group(function (){
        Route::get('home/service/{people}',  [ServicesController::class, 'show_home_services'])->name('home_elpha_services');
        Route::get('options/service/{people}',  [ServicesController::class, 'show_option_services'])->name('show_elpha_options_services');
        Route::get('options/service/{people}/{movement_id}',  [ServicesController::class, 'show_form_services'])->name('show_elpha_form_services');
        Route::post('options/service/{people}',  [ServicesController::class, 'create_services'])->name('elpha_create_services');
    });
});

