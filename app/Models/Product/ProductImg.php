<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'file_path',
        'type_file',
        'file_extension',
        'order',
        'product_id',
    ];

    public function type_file()
    {
        /*
        * 0 =>  logo
        */
        return [
            "logo"
        ];
    }

    public function file_extension()
    {
        /*
        * 0 =>  png
        * 1 =>  jpg
        * 2 =>  jpeg
        */
        return [
            "png",
            "jpg",
            "jpeg"
        ];
    }
}
