<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription_requests extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'subscription_type',
        'status',
    ];
}
 