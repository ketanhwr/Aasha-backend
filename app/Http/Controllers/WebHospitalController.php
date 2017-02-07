<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use \Carbon\Carbon;

use \App\Hospital;
use \App\Appointment;
use \App\Patient;
use \App\Doctor;
use \App\Visit;

class WebHospitalController extends Controller
{

    public function index($id)
    {
    	$hospital = Hospital::find($id);

    	$appointments = Appointment::where('hospital_id', $id)->orderBy('time')->get();
    	foreach ($appointments as $appointment)
    	{
    		$appointment->patient = Patient::find($appointment->patient_id);
            $appointment->time_left = Carbon::createFromFormat('Y-m-d H:i:s', $appointment->time)->diffForHumans(Carbon::now());
    	}

    	$pregnant_patients = Patient::where('hospital_id', $id)->where('pregnant', '1')->get();
    	foreach($pregnant_patients as $patient)
    	{
    		$patient->time_left = Carbon::createFromFormat('Y-m-d H:i:s', $patient->duedate)->diffForHumans(Carbon::now());
    	}

    	$visits = Visit::where('hospital_id', $id)->get();
    	foreach($visits as $visit)
    	{
    		$visit->doctor = Doctor::find($visit->doctor_id);
    	}

    	if(isset($hospital))
    	{
    		return view('home')->with('hospital', $hospital)->with('appointments', $appointments)->with('pregnant_patients', $pregnant_patients)->with('visiting_doctors', $visits);
    	}
    	else
    	{
    		echo "Hospital does not exist!";
    	}
    }

    public function list()
    {
    	$hospitals = Hospital::all();
    	return view('hospital_list')->with('hospitals', $hospitals);
    }
}
