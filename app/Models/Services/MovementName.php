<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'movement_type_id',
    ];

    public function movement_type()
    {
        return $this->belongsTo(MovementType::class);
    }
}
