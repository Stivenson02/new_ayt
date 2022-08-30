<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'clasificate_measure',
        'type_measure',
        'measure_name',
        'measure',
        'equivalent_measure',
        'equivalent_measure_id',
        'product_type_id'
    ];
}
