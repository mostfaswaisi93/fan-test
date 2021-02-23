<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'type_of_prescription',
        'details',
        'date_of_prescription',
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
