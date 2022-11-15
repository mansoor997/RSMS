<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RsOffice extends Model
{
    protected $fillable = [
        'CRN',
        'Company_name',
        'city',
        'status',
        'presenter_name',
        'presenter_number',
        'company_logo',
        'presenter_email',

    ];
}
 