<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use \App\Hospital;
use \App\Appointment;
use \App\Patient;

class HomeController extends Controller
{
    public function index($id)
    {
    	$hospital = Hospital::find($id);
    	$appointments = Appointment::where('hospital_id', $id)->get();

    	foreach ($appointments as $appointment) {
    		$appointment->patient = Patient::find($appointment->patient_id);
    	}

    	$pregnant_patients = Patient::where('hospital_id', $id)->where('pregnant', '1')->get();

    	if(isset($hospital))
    	{
    		return view('home')->with('hospital', $hospital)->with('appointments', $appointments)->with('pregnant_patients', $pregnant_patients);
    	}
    	else
    	{
    		echo "Hospital does not exist!";
    	}
    }
}
