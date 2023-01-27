<?php

namespace App\Http\Controllers\Rino\Products;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyFile;
use App\Models\Company\CompanyPeople;
use App\Models\Product\Product;
use App\Models\Product\ProductImg;
use App\Models\Product\ProductType;
use Illuminate\Http\Request;
use App\Services\GeneralServices\StorageService;

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
            'type_product' => 'required',
        ]);
        $data = $request->all();
        $company = CompanyPeople::where('slug', $data['people'])->first()->company;
        if ($data['type_product'] == "0") {
            $request->validate([
                'other_type' => 'required',
            ]);

            $product_type = new ProductType();
            $product_type->name = $data["other_type"];
            $product_type->slug = slug_token('lukran_option_' . $company->name . '_' . $product_type->name);
            $product_type->company_id = $company->id;
            $product_type->save();

        } else {
            $product_type = ProductType::find($data['type_product']);
        }

        $product = new Product();
        $product->name = $data['product_name'];
        $product->description = $data['product_description'];
        $product->slug = slug_token($product->id . $data["product_name"]);
        $product->nit_intern = $product_type->id . '-' . date('dmy').'-'.Product::all()->count();
        $product->nit_extern =$data['product_nit_extern'];
        $product->company_id = $company->id;
        $product->product_type_id = $product_type->id;
        $product->status = $product->status()[0];
        $product->save();

  /*      $img = StorageService::created($request->img_product, $company->slug . '/products');

        ProductImg::updateOrCreate(
            [
                'product_id' => $company->id,
                'type_file' => 'product_first',
                'order' => '0',
            ],
            [
                'file' => $img['image_name'],
                'file_path' => $img['image'],
                'file_extension' => 'IMG',
            ]
        );*/

        return redirect()->route('show_rino_products_create', ['people' => $data['people']]);

    }
}
