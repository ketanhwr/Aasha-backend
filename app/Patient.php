<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'uid', 'password', 'image', 'address', 'phone', 'pregnant', 'duedate', 'conceivedate', 'hospital_id'];
}
