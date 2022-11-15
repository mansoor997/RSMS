<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renter_contract extends Model
{
    protected $fillable = [
        'renters_id',
        'owners_id',
        'contract_number',
        'rent_start_date',
        'rent_end_date',
        'electricity',
        'water',
        'contract',
        'paid_pirod',
        'commion_RS',
        'monthly_amount',
        'status',
        'propartie_id',
    ];
}
 //add stats of contract 