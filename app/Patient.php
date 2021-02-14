<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'aderss',
        'phone',
        'gender',
        'user_id',
        'email',
        'DOB',

    ];

    public function users()
    {
        $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

    public function pays()
    {
        return $this->hasMany(Pays::class);
    }
}
