<?php

namespace App\Http\Controllers\Elpha\Services;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function show_home_services($people)
    {
        $people = CompanyPeople::firstWhere('slug', $people);
        return view('elpha.show.show', [
            'people' => $people
        ]);
    }

}
