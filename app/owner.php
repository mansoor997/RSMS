<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\owners_proparties;

class owner extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'name',
        'phone_number',
        'email',
        'city',
   

    ];


    public function proparties()
    {
        return $this->hasmany(owners_proparties::class,'owners_id');
    }


}
 