<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalService extends Model
{
    use HasFactory;

    protected $fillable = [
        'movement_type_id',
        'registration_date',
        'automatic_amount',
        'registration_amount',
        'difference_amount',
    ];
}
