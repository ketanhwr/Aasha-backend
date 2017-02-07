<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use \App\Appointment;

class WebAppointmentController extends Controller
{
    public function edit($id)
    {
    	$appointment = Appointment::find($id);
    	return view('appointment_editor')->with('appointment', $appointment);
    }

    public function update(Request $request, $id)
    {
    	$appointment = Appointment::find($id);
    	if(isset($appointment))
    	{
    		$appointment->fill($request->all());
    		$appointment->save();
    		echo "Success!";
    	}
    	else
    	{
    		echo "Appointment Not Found!";
    	}
    }
}
