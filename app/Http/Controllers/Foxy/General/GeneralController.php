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

    public function show_register_continue()
    {
        $user = Auth::user();
        $processes = $user->processes->where("process", "register");
        $in_process = [];
        foreach ($processes as $process) {
            if ($process['table'] == CompanyPeople::getTableName()) {
                $company = CompanyPeople::where('slug', $process['slug_table'])->first();
                $in_process['company'.$company['id']]['company_people'] = $company;
                $in_process['company'.$company['id']]['company'] = $company->company;
            }
            array_push($in_process, $process['company']);
        }
        dd($in_process);

        return view('foxy.general.show_register_continue', [
            'processes' => $in_process
        ]);

    }

}
