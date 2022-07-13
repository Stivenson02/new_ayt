<?php

use App\Http\Controllers\Foxy\Company\CompanyController;
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
});

require __DIR__.'/auth.php';

Route::view('/terms', 'terms');
Route::view('/policy', 'policy');
