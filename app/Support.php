<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'type',
        'level',
        'subject',
        'content',
        'admin_response',
        'status',
 
    ];
}
