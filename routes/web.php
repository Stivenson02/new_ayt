<?php

use App\Http\Controllers\Foxy\Company\CompanyController;
use App\Http\Controllers\Foxy\General\GeneralController;
use App\Http\Controllers\Foxy\Stakeholder\StakeholderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['v_company']], function (){
        Route::view('/dashboard', 'dashboard');
        Route::view('/profile', 'dashboard');
    });
    Route::prefix('register')->group(function (){
        Route::get('/company',  [CompanyController::class, 'show']);
        Route::post('/company',  [CompanyController::class, 'create'])->name('register_company');

        Route::get('/company_complements',  [CompanyController::class, 'edit'])->name('show_company_complements');
        Route::post('/company_complements/{people}',  [CompanyController::class, 'update'])->name('register_company_complements');

        Route::get('/stakeholder',  [StakeholderController::class, 'show'])->name('show_registry_stakeholder');
        Route::post('/stakeholder/{people}',  [StakeholderController::class, 'create'])->name('register_stakeholder');

        Route::get('/collaborators',  [StakeholderController::class, 'show_collaborator'])->name('show_register_collaborator');
        Route::post('/collaborators/{people}',  [StakeholderController::class, 'create_collaborator'])->name('create_collaborator');

        Route::get('/welcome', [GeneralController::class, 'show_register_welcome'])->name('show_register_welcome');

        Route::get('/stakeholder_collaborators', [StakeholderController::class, 'show_stakeholder_collaborator'])->name('show_register_stakeholder_collaborators');
    });
    Route::prefix('foxy')->group(function (){
        Route::get('continue',  [GeneralController::class, 'show_register_continue'])->name('show_register_continue');
    });
});

require __DIR__.'/auth.php';

Route::view('/terms', 'terms');
Route::view('/policy', 'policy');
