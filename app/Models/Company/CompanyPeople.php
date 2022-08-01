<?php

namespace App\Models\Company;

use App\Models\People\Stakeholder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPeople extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'company_id',
        'stakeholder_id',
        'user_id',
        'status',
        'type_user'
    ];

    public function type_user()
    {
        /*
         * 0 =>  super_admin
         * 1 =>  creator
         * 3 =>  creator
         */
        return [
            "super_admin",
            "admin",
            "collaborater",
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

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stakeholder()
    {
        return $this->belongsTo(Stakeholder::class);
    }
}
