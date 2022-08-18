<?php

namespace App\Models\Product;

use App\Models\Company\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'nit',
        'company_id',
        'product_type_id',
        'status',
    ];

    public function status()
    {
        /*
        * 0 =>  active
        * 1 =>  inactive
        */
        return [
            "active",
            "inactive"
        ];
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
