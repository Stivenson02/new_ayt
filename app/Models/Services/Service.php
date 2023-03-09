<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'movement_name_id',
        'movement_type_id',
        'payment_method_id',
        'description',
        'payment_invoice',
        'payment_recipient',
        'registration_date',
        'amount',
        'status',
    ];
}
