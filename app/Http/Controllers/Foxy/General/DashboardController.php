<?php

namespace App\Http\Controllers\Foxy\General;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use App\Services\GeneralServices\ProcessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

}
