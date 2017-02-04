<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'details', 'latitude', 'longitude'];
}
