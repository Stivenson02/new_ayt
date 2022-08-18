<?php


use App\Http\Controllers\Foxy\Home\Stakeholder\StakeholderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('rino')->group(function (){
        //Route::get('products',  [StakeholderController::class, 'show_collaborators'])->name('show_home_collaborators');
    });
});


