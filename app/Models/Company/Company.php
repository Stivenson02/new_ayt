<?php

namespace App\Models\Company;

use App\Models\People\Job;
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
            "business",
            "company"
        ];
    }

    public function peoples()
    {
        return $this->hasMany(CompanyPeople::class);
    }
    public function files()
    {
        return $this->hasMany(CompanyFile::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }


}
