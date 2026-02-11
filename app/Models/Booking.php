<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'service',
        'frequency',
        'job_date',
        'stripe_price_id',
        'stripe_session_id',
        'payment_status',
        'paid_at',
    ];

    protected $casts = [
        'job_date' => 'datetime',
        'paid_at'  => 'datetime',
    ];
}
