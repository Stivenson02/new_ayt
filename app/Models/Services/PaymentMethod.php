<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    public function status()
    {
        /*
        * 0 =>  active
        * 1 =>  inactive
        */
        return [
            "active",
            "inactive"
        ];
    }
}
