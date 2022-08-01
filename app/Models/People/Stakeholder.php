<?php

namespace App\Models\People;

use App\Models\Company\CompanyPeople;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'first_name',
        'second_name',
        'first_last_name',
        'second_last_name',
        'status',
        'address',
        'type_document',
        'document',
        'city_id',
        'job_id',
        'user_id'
    ];

    public function type_document()
    {
        /*
        * 0 =>  CC
        * 1 =>  CE
        */
        return [
            "CC",
            "CE"
        ];
    }

    public function status()
    {
        /*
        * 0 =>  active
        * 1 =>  pending
        * 2 =>  pending
        * 3 =>  locked
        */
        return [
            "active",
            "pending",
            "inactive",
            "locked"
        ];
    }


    public function peoples()
    {
        return $this->hasMany(CompanyPeople::class);
    }
}
