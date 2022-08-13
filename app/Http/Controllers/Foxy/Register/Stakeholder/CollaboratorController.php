<?php

namespace App\Http\Controllers\Foxy\Register\Stakeholder;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use App\Models\People\Stakeholder;
use App\Services\GeneralServices\ProcessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollaboratorController extends Controller
{
    public function show_registry_collaborator()
    {
        $user = Auth::user();
        $stakeholder = Stakeholder::where('phone', $user->phone)->first();
        return view('foxy.register.collaborator_welcome', [
            "stakeholders" => $stakeholder
        ]);
    }

    public function collaborator_integration(Request $request)
    {
        $data = $request->all();

        $company_people=CompanyPeople::firstWhere('slug', $data['people']);
        $company_people->user_id=Auth::user()->id;
        $company_people->save();

        $register_process = [
            'user_id' => $company_people->user_id,
            'stakeholder_id' => $company_people->stakeholder_id,
            'process' => 'register',
            'table' => CompanyPeople::getTableName(),
            'slug_table' => $company_people->slug,
            'status' => 'in_process',
            'type_url' => 0,
            'last_url' => url()->current(),
            'next_url' => 'show_registry_collaborator_stakeholder',
        ];

        $process = ProcessService::registerProcess($register_process);
        return redirect()->route('show_registry_collaborator_stakeholder', ['company' => $company_people->slug, 'process' => $process->slug]);
    }

    public function collaborator_stakeholder(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
