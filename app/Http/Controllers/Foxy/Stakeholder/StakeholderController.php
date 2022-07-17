<?php

namespace App\Http\Controllers\Foxy\Stakeholder;

use App\Http\Controllers\Controller;
use App\Models\Company\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StakeholderController extends Controller
{
    public function show(Request $request)
    {
        return view('foxy.register.stakeholder', [
            'user' => Auth::user()
        ]);
    }
}
