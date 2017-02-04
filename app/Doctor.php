<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'uid', 'password', 'image', 'phone', 'address', 'details'];
}
