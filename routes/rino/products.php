<?php


use App\Http\Controllers\Rino\Products\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('rino')->group(function (){
        Route::get('create_products/{people}',  [ProductController::class, 'show_create_products'])->name('show_rino_products_create');
        Route::post('create_products/{people}',  [ProductController::class, 'create_products'])->name('rino_create_products');
    });
});


