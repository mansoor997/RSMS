<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $fillable = [
        'renters_id',
        'amount',
        'file',
  
    ];
}
 