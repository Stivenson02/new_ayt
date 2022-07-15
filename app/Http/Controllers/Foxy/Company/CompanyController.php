<?php

namespace App\Http\Controllers\Foxy\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use App\Models\Company\CompanyPeople;
use App\Services\GenralServices\ProcessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Routing\UrlGenerator;

class CompanyController extends Controller
{

    public function show()
    {
        $company = new Company();
        $company->type_company()[0];
        $type_company = [$company->type_company()[0] => "NO", $company->type_company()[1] => "SI"];
        return view('foxy.register.company', [
            'user' => Auth::user(),
            'type_company' => $type_company
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $company = new Company();
        $company->name = $data["name"];
        $company->bussines_name = $data["name"];
        $company->description = $data["description"];
        $company->type_company = $data["type_company"];
        $company->save();

        $company_people = new CompanyPeople();
        $company_people->slug = slug_token($company->id . $data["name"]);
        $company_people->company_id = $company->id;
        $company_people->user_id = Auth::user()->id;
        $company_people->status = $company_people->status()[0];
        $company_people->type_user = $company_people->type_user()[0];
        $company_people->save();

        if ($data["type_company"] == $company->type_company()[1]) {
            $view = 'show_company_complements';
        } else {
            $view = 'show_stakeholder';
        }

        $process=ProcessService::registerProcess('register', $company_people->user_id, null, 'in_process', 0, url()->current(), $view);

        return redirect()->route($view, ['company' => $company_people->slug, 'process'=>$process->slug]);
    }

    public function company_complements(Request $request)
    {
        dd($request->all());
    }
}
