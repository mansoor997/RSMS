<?php

namespace App;
use App\renter_contract;

use Illuminate\Database\Eloquent\Model;

class payments_pirod extends Model
{
    protected $fillable = [
        'renter_contracts_id',
        'payment_number',
        'payment_dueDate',
        'monthly_amount',
        'commion_RS',
        'total',
        'status',
        'water',
        'electricity',
    ];

    public function contracts()
    {
        return $this->belongsTo(renter_contract::class,'renter_contracts_id');
    }
 
}
 
