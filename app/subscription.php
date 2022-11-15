<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'subscriptions_type',
        'date_start',
        'date_end',
        'status',
   

    ];
}
 