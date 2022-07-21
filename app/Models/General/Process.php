<?php

namespace App\Models\General;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'process',
        'status',
        'percentage',
        'total_steps',
        'last_step',
        'type_url',
        'last_url',
        'next_url',
        'user_id',
        'table',
        'slug_table',
    ];

    public function type_url()
    {
        /*
        * 0 =>  local_web_route
        * 1 =>  local_web_url
        */
        return [
            "local_web_route",
            "local_web_url"
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
