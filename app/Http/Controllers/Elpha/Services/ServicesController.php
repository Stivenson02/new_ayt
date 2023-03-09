<?php

namespace App\Http\Controllers\Elpha\Services;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use App\Models\Services\MovementType;
use App\Models\Services\PaymentMethod;
use App\Models\Services\Service;
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

    public function show_option_services($people)
    {
        $people = CompanyPeople::firstWhere('slug', $people);
        $movements = MovementType::all();
        return view('elpha.services.options', [
            'people' => $people,
            'movements' => $movements
        ]);
    }

    public function show_form_services($people, $movement_id)
    {
        $people = CompanyPeople::firstWhere('slug', $people);
        $movement = MovementType::find($movement_id);
        $payment_methods = PaymentMethod::where('status', 'active')->get();

        return view('elpha.services.form', [
            'people' => $people,
            'movement' => $movement,
            'payment_methods' => $payment_methods
        ]);
    }

    public function create_services(Request $request, $people)
    {
        $request->validate([
            'registration_date' => 'required',
            'service_description' => 'required',
            'amount' => 'required',
        ]);

        $data = $request->all();

        $service = new Service();
        $service->movement_name_id = $data['movement_name'];
        $service->movement_type_id = $data['movement_type'];
        $service->payment_method_id = $data['payment_method'];
        $service->description = $data['service_description'];
        $service->payment_invoice = $data['payment_invoice'];
        $service->payment_recipient = $data['payment_recipient'];
        $service->registration_date = $data['registration_date'];
        $service->amount = $data['amount'];
        $service->status = "active";
        $service->save();

        return redirect()->route('show_elpha_options_services', ['people' => $people]);
    }

}
