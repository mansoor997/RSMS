<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subUser extends Model
{
    protected $fillable = [
        'rs_offices_id',
        'email',
        'password',
        'owners',
        'renters',
        'accountant',
        'CRM',
        'bills',
        'tells',
        'subusers',
        'support',
        'subscriptions',
        'userType',

    ];
}
 