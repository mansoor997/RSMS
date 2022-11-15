<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owners_proparties extends Model
{
    protected $fillable = [
        'owners_id',
        'name',
        'type',
        'city',
        'deed_number',
        'google_maps',
    ];
}
 