<?php

namespace App\Http\Controllers\Foxy\Stakeholder;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Company\CompanyPeople;
use App\Models\Map\City;
use App\Models\Models\People\StakeholderJob;
use App\Models\People\Job;
use App\Models\People\Stakeholder;
use App\Services\GeneralServices\ProcessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StakeholderController extends Controller
{
    public function show(Request $request)
    {
        $data = $request->all();

        $company_people = CompanyPeople::firstWhere('slug', $data['company']);
        $cities = City::OfCities('Colombia')->get();
        $stakeholder = new Stakeholder();

        return view('foxy.register.stakeholder', [
            'people' => $company_people,
            'process' => $data['process'],
            'cities' => $cities,
            'type_documents' => $stakeholder->type_document(),
        ]);
    }

    public function create($people, Request $request)
    {
        $request->validate([
            'document' => 'required|max:12',
            'first_name' => 'required|min:3',
            'first_last_name' => 'required|min:3',
            'address' => 'required|min:6',
            'type_document' => 'required',
            'city' => 'required'
        ]);

        $data = $request->all();

        $company_people = CompanyPeople::firstWhere('slug', $people);
        $job = $company_people->company->jobs->firstWhere('name', 'Administrador');

        $stakeholder = new Stakeholder();
        $stakeholder->slug = slug_token(Auth::user()->phone);
        $stakeholder->phone = Auth::user()->phone;
        $stakeholder->first_name = ucfirst(strtolower($data['first_name']));
        $stakeholder->second_name = ucfirst(strtolower($data['second_name']));
        $stakeholder->first_last_name = ucfirst(strtolower($data['first_last_name']));
        $stakeholder->second_last_name = ucfirst(strtolower($data['second_last_name']));
        $stakeholder->status = $stakeholder->status()[0];
        $stakeholder->address = $data['address'];
        $stakeholder->type_document = $stakeholder->type_document()[$data['type_document']];
        $stakeholder->document = $data['document'];
        $stakeholder->city_id = $data['city'];
        $stakeholder->user_id = Auth::user()->id;
        $stakeholder->save();

        $stakeholder_job = new StakeholderJob();
        $stakeholder_job->job_id = $job->id;
        $stakeholder_job->company_id = $company_people->company->id;
        $stakeholder_job->stakeholder_id = $stakeholder->id;
        $stakeholder_job->save();

        $register_process = [
            'user_id' => $company_people->user_id,
            'process' => 'register',
            'table' => CompanyPeople::getTableName(),
            'slug_table' => $company_people->slug,
            'status' => 'in_process',
            'type_url' => 0,
            'last_url' => url()->current(),
            'next_url' => 'show_registry_collaborator',
        ];

        $process = ProcessService::registerProcess($register_process);

        return redirect()->route('show_registry_collaborator', ['company' => $company_people->slug, 'process' => $process->slug]);
    }

    public function show_collaborator(Request $request)
    {
        $data= $request->all();

        $company_people = CompanyPeople::firstWhere('slug', $data['company']);
        $cities = City::OfCities('Colombia')->get();
        $stakeholder = new Stakeholder();

        return view('foxy.register.collaborator', [
            'people' => $company_people,
            'process' => $data['process'],
            'cities' => $cities,
            'type_documents' => $stakeholder->type_document(),
        ]);
    }

}
