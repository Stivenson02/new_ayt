<?php

namespace App\Models\People;

use App\Models\Company\CompanyPeople;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        * 2 =>  inactive
        * 3 =>  locked
        */
        return [
            "active",
            "pending",
            "inactive",
            "locked"
        ];
    }

    public function status_color()
    {
        /*
        * 0 =>  active
        * 1 =>  pending
        * 2 =>  inactive
        * 3 =>  locked
        */
        return [
            "active" => ["Activo", "btn btn-success"],
            "pending" => ["Pendiente", "btn btn-warning"],
            "inactive" => ["Activo", "btn btn-danger"],
            "locked" => ["Activo", "btn btn-danger"]
        ];
    }


    public function peoples()
    {
        return $this->hasMany(CompanyPeople::class);
    }

    public function scopeOfCompanyStakeholder($query, $company_id)
    {
        return $query->select('stakeholders.*')
            ->join('stakeholder_jobs', 'stakeholder_jobs.stakeholder_id', 'stakeholders.id')
            ->join('jobs', 'jobs.id', 'stakeholder_jobs.job_id')
            ->where('jobs.name', 'Colaborador')
            ->where('jobs.company_id', $company_id);
    }

}
