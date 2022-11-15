<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renter_doc extends Model
{
    protected $fillable = [
        'renters_id',
        'name',
        'type',
        'upload_by',
 
    ];
}
 