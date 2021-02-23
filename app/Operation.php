<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'type_operate',
        'photo_teeth',
        'date_of_operate',
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
