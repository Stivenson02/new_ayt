<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bussines_name',
        'description',
        'document',
        'type_company'
    ];

    public function type_company()
    {
        /*
        * 0 =>  entrepreneurship
        * 1 =>  business
        */
        return [
            "entrepreneurship",
            "business"
        ];
    }

    public function peoples()
    {
        return $this->hasMany(CompanyPeople::class);
    }

}
