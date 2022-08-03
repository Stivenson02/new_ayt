<?php

namespace App\Http\Controllers\Foxy\General;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{

    public function show_register_continue()
    {
        $user = Auth::user();
        $processes = $user->processes->where("process", "register")->where('table', CompanyPeople::getTableName());

        return view('foxy.general.show_register_continue', [
            'processes' => $processes
        ]);
    }
    public function show_register_welcome()
    {

        $user = Auth::user();
        $processes = $user->processes->where("process", "register")->where('table', CompanyPeople::getTableName());

        return view('foxy.general.show_welcome', [
            'processes' => $processes
        ]);
    }


}
