<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $fillable = [
        'patient_id',
        'pay',
    ];

    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
}
