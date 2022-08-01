<?php

namespace App\Models\Map;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    use HasFactory;


    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function scopeOfCities($query, $country, )
    {

        return $query->select('cities.*', DB::raw( "CONCAT(departments.name, ' - ', cities.name ) AS full_name"))
            ->join('departments', 'departments.id', 'cities.department_id')
            ->join('countries', 'countries.id', 'departments.country_id')
            ->where('countries.name', $country);
    }
}
