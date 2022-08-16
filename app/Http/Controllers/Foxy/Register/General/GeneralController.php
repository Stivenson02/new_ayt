<?php

namespace App\Http\Controllers\Foxy\Register\General;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use App\Services\GeneralServices\ProcessService;
use Illuminate\Http\Request;
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

    public function show_register_welcome(Request $request)
    {
        $data= $request;

        return view('foxy.general.show_welcome', [
            'people' => $data['people']
        ]);
    }

    public function finish_register_welcome(Request $request)
    {
        $data= $request;

        $company_people= CompanyPeople::firstWhere('slug', $data['people']);

        $register_process = [
            'user_id' => $company_people->user_id,
            'stakeholder_id' => $company_people->stakeholder_id,
            'process' => 'register',
            'table' => CompanyPeople::getTableName(),
            'slug_table' => $company_people->slug,
            'status' => 'complete',
            'type_url' => 1,
            'last_url' => url()->current(),
            'next_url' => '/dashboard',
        ];

        ProcessService::registerProcess($register_process);

        return redirect('/dashboard');
    }


}
