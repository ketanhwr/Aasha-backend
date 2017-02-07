<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use \App\Doctor;

class WebDoctorController extends Controller
{
    public function index($id)
    {
    	$doctor = Doctor::find($id);
    	return view('doctor')->with('doctor', $doctor);
    }
}
