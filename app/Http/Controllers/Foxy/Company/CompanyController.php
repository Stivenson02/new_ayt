<?php

namespace App\Http\Controllers\Foxy\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{

    public function show()
    {
        return view('foxy.register.company', [
            'user' => Auth::user()
        ]);
    }

    public function create(Request $request)
    {
        dd($request->all());

    }
}
