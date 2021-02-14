<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'total_Amount',
        'first_Amount',
        'remaining_Amount',
        'time_of_payment',
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
