<?php

namespace App\Http\Controllers\Foxy\Home\Stakeholder;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use App\Models\Map\City;
use App\Models\People\Stakeholder;
use Illuminate\Support\Facades\Auth;


class StakeholderController extends Controller
{
    public function show_collaborators()
    {
        $user=Auth::user();
        $people= new CompanyPeople();
        $data_people=$user->peoples->where('type_user',$people->type_user()[0]);

        if ($data_people->count() > 0){
            $cities = City::OfCities('Colombia')->get();
            $stakeholder = new Stakeholder();
            $collaborator = Stakeholder::OfCompanyStakeholder($data_people->first()->company->id)->get();
            return view('foxy.home.collaborator', [
                'people' => $data_people->first(),
                'cities' => $cities,
                'collaborators' => $collaborator,
                'status_color' => $stakeholder->status_color(),
            ]);
        }else{
            dd(0);
        }

    }
}
