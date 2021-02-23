<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'start_date',
        'end_date',
        'details',
    ];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
