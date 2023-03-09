<?php

namespace App\Models\Services;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementType extends Model
{
    use HasFactory;

    protected $fillable = [
        'friendly_name',
        'accounting_name',
    ];

    public function movement_names()
    {
        return $this->hasMany(MovementName::class);
    }
}
