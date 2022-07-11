<?php

namespace App\Models\People;

use App\Models\Company\CompanyPeople;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    use HasFactory;

    public function peoples()
    {
        return $this->hasMany(CompanyPeople::class);
    }
}
