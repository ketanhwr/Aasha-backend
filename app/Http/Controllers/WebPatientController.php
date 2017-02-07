<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use \App\Patient;

class WebPatientController extends Controller
{
    public function index($id)
    {
    	$patient = Patient::find($id);
    	return view('patient')->with('patient', $patient);
    }
}
