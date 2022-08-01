<?php

namespace App\Models\Map;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
