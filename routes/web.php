<?php

use App\Http\Controllers\Foxy\Company\CompanyController;
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
    Route::get('/company',  [CompanyController::class, 'show']);
    Route::post('/company',  [CompanyController::class, 'create'])->name('company');

    Route::get('/company_complements',  [CompanyController::class, 'company_complements'])->name('show_company_complements');
    Route::get('/stakeholder',  [StakeholderController::class, 'show'])->name('show_stakeholder');
});

require __DIR__.'/auth.php';

Route::view('/terms', 'terms');
Route::view('/policy', 'policy');
