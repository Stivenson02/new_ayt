<?php

namespace App\Http\Controllers\Foxy\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

    public function index()
    {
        $user=Auth::user();
        $data_people=$user->peoples->first();

        return view('dashboard',[
            'type_user'=> $data_people['type_user']
        ]);
    }

}
