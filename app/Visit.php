<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['doctor_id', 'hospital_id', 'begin', 'end'];
}
