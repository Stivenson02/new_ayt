<?php

namespace App\Http\Controllers\Foxy\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Company\CompanyFile;
use App\Models\Company\CompanyPeople;
use App\Services\GeneralServices\ProcessService;
use App\Services\GeneralServices\StorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{

    public function show()
    {
        $company = new Company();
        $company->type_company()[0];
        $type_company = [$company->type_company()[0] => "NO", $company->type_company()[1] => "SI"];
        return view('foxy.register.company', [
            'type_company' => $type_company
        ]);
    }

    public function create(Request $request)
    {

        #VALIDAR QUE NO TENGA PROCESOS PENDIENTES CON UN  MIDDLEWARE COMO IDEA
        $data = $request->all();
        $user = Auth::user();

        $company = new Company();
        $company->slug = slug_token($company->id . $data["name"]);
        $company->name = $data["name"];
        $company->bussines_name = $data["name"];
        $company->description = $data["description"];
        $company->type_company = $data["type_company"];
        $company->save();

        $company_people = new CompanyPeople();
        $company_people->slug = slug_token($user->id . $company->id . $data["name"]);
        $company_people->company_id = $company->id;
        $company_people->user_id = $user->id;
        $company_people->status = $company_people->status()[0];
        $company_people->type_user = $company_people->type_user()[0];
        $company_people->save();


        $register_process = [
            'user_id' => $company_people->user_id,
            'process' => 'register',
            'table' => CompanyPeople::getTableName(),
            'slug_table' => $company_people->slug,
            'status' => 'in_process',
            'type_url' => 0,
            'last_url' => url()->current(),
            'next_url' => 'show_company_complements',
        ];

        $process = ProcessService::registerProcess($register_process);

        return redirect()->route('show_company_complements', ['company' => $company_people->slug, 'process' => $process->slug]);
    }

    public function edit(Request $request)
    {
        $data = $request->all();
        $company_people = CompanyPeople::firstWhere('slug', $data["company"]);


        return view('foxy.register.company_options', [
            'company' => $company_people->company,
            'people' => $company_people,
            'process' => $data['process']
        ]);
    }


    public function update($people, Request $request)
    {
        $request->validate([
            'img_logo' => 'required'
        ]);
        $data = $request->all();
        if ($data['document']) {
            $request->validate([
                'document' => 'max:255',
                'verification' => 'required|max:1',
            ]);
        }

        $company_people = CompanyPeople::firstWhere('slug', $people);
        $company = $company_people->company;

        if (!$company->files->where('type_file')->count() == 0) {
            StorageService::delete($company->slug . '/' . $company->files->where('type_file')->first()->file);
        }

        $img = StorageService::created($request->img_logo, $company->slug);

        CompanyFile::updateOrCreate(
            [
                'company_id' => $company->id,
                'type_file' => 'company_logo',
            ],
            [
                'file' => $img['image_name'],
                'file_path' => $img['image'],
                'file_extension' => 'IMG'
            ]
        );

        $register_process = [
            'user_id' => $company_people->user_id,
            'process' => 'register',
            'table' => CompanyPeople::getTableName(),
            'slug_table' => $company_people->slug,
            'status' => 'in_process',
            'type_url' => 0,
            'last_url' => url()->current(),
            'next_url' => 'show_registry_stakeholder',
        ];

        $process = ProcessService::registerProcess($register_process);

        return redirect()->route('show_registry_stakeholder', ['company' => $company_people->slug, 'process' => $process->slug]);

    }
}
