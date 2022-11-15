<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRoles extends Model
{
    protected $fillable = [
        'email',
        'role',
        
    ];
}
