<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'subject',
        'content',
     ];
}
 