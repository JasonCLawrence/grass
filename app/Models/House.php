<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'house_number',
        'geometry',
        'status'
    ];

    protected $casts = [
        'geometry' => 'array'
    ];
}
