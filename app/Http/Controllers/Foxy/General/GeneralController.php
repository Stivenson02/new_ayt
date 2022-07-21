<?php

namespace App\Http\Controllers\Foxy\General;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Company\CompanyPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{

    public function show_continue()
    {
        $user = Auth::user();
        $processes=$user->processes->where("process", "register");

        return view('foxy.general.show_continue', [
            'processes' => $processes
        ]);

    }


}
