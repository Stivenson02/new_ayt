<?php

namespace App\Models\Company;

use App\Models\People\Stakeholder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPeople extends Model
{
    use HasFactory;

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
