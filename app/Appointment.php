<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['patient_id', 'hospital_id', 'doctor_id', 'time', 'description', 'status'];
}
