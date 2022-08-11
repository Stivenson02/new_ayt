<?php


use App\Http\Controllers\Foxy\Home\Stakeholder\StakeholderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('home')->group(function (){
        Route::get('collaborators',  [StakeholderController::class, 'show_collaborators'])->name('show_home_collaborators');
    });
});


