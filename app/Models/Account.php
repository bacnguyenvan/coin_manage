<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $fillable = [
        'name','email', 'password', 'google_id','facebook_id','image'
    ];

}
