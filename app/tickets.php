<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'subject',
        'content',
        'attachment',
        'admin_response',
        'status',
    ];
}
 