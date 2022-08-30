<?php

namespace App\Http\Controllers\Rino\Products;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyPeople;
use App\Models\Product\Product;
use App\Models\Product\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_home_products($people)
    {
        $people = CompanyPeople::firstWhere('slug', $people);
        return view('rino.show.show', [
            'products' => Product::where('company_id', $people->company->id)->paginate(15),
            'people' => $people
        ]);

    }

    public function show_create_products($people)
    {
        $company_people = CompanyPeople::firstWhere('slug', $people);

        $product_types = ProductType::where('company_id', null)
            ->orWhere('company_id', $company_people->company_id)
            ->get();

        return view('rino.form.form', [
            'people' => $company_people,
            'products_types' => $product_types
        ]);
    }

    public function create_products(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'img_product' => 'required',
            'type_product' => 'required',
        ]);
        $data = $request->all();
        if ($data['type_product'] == "0") {
            $request->validate([
                'other_type' => 'required',
            ]);
        }
        /* $data['type_product'] = ucfirst(strtolower($data['type_product']));*/

    }
}
