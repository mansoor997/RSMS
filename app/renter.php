<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\renter_contract;

class renter extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'name',
        'phone_number',
        'city',
        'email',
        'password',
    ];


    public function contracts()
    {
        return $this->hasmany(renter_contract::class,'renters_id');
    }


}
 