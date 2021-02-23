<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'DOB',
        'gender',
        'aderss',
        'email',
        'phone',
        'specialty',

    ];
}
