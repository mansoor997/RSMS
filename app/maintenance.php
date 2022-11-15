<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    protected $fillable = [
        'renters_id',
        'subject',
        'content',
        'attachment',
        'RS_Office_response',
    ];
}
 