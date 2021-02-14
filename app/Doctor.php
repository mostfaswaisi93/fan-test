<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'name',
        'surname',
        'user_id',
        'gender',
        'aderss',
        'email',
        'qualification',
        'specialization',
        'phone',
        'DOB',
        'photo',

    ];

    public function users()
    {
        return $this->belongsTo(User::class);
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

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
