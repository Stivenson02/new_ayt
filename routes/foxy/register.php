<?php


use App\Http\Controllers\Foxy\Register\Company\CompanyController;
use App\Http\Controllers\Foxy\Register\General\GeneralController;
use App\Http\Controllers\Foxy\Register\Stakeholder\CollaboratorController;
use App\Http\Controllers\Foxy\Register\Stakeholder\StakeholderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('register')->group(function (){
        Route::get('/collaborator_welcome',  [CollaboratorController::class, 'show_registry_collaborator']);
        Route::get('/collaborator_integration',  [CollaboratorController::class, 'collaborator_integration'])->name('show_registry_collaborator_integration');
        Route::get('/collaborator_stakeholder',  [CollaboratorController::class, 'collaborator_stakeholder'])->name('show_registry_collaborator_stakeholder');

        Route::get('/company',  [CompanyController::class, 'show']);
        Route::post('/company',  [CompanyController::class, 'create'])->name('register_company');

        Route::get('/company_complements',  [CompanyController::class, 'edit'])->name('show_company_complements');
        Route::post('/company_complements/{people}',  [CompanyController::class, 'update'])->name('register_company_complements');

        Route::get('/stakeholder',  [StakeholderController::class, 'show'])->name('show_registry_stakeholder');
        Route::post('/stakeholder/{people}',  [StakeholderController::class, 'create'])->name('register_stakeholder');

        Route::get('/collaborators',  [StakeholderController::class, 'show_collaborator'])->name('show_register_collaborator');
        Route::post('/collaborators/{people}',  [StakeholderController::class, 'create_collaborator'])->name('create_collaborator');

        Route::get('/welcome', [GeneralController::class, 'show_register_welcome'])->name('show_register_welcome');
        Route::get('/finish', [GeneralController::class, 'finish_register_welcome'])->name('finish_register_welcome');

        Route::get('/stakeholder_collaborators', [StakeholderController::class, 'show_stakeholder_collaborator'])->name('show_register_stakeholder_collaborators');
    });
    Route::prefix('foxy')->group(function (){
        Route::get('continue',  [GeneralController::class, 'show_register_continue'])->name('show_register_continue');
    });
});


