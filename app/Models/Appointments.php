<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    public function doctor()
{
   return $this->belongsTo(Doctor::class,'doctor_id');
}
public function patient()
{
   return $this->belongsTo(Patient::class,'patient_id');
}
}
