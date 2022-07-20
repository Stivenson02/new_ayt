<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'file_path',
        'type_file',
        'file_extension',
        'company_id'
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

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
