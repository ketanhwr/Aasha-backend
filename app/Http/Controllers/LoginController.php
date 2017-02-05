<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Reponse;
use \App\Patient;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	$patient = Patient::where("uid", $request->uid)->where("password", $request->password)->first();
    	if(isset($patient))
    	{
    		return $patient->id;
    	}
    	else
    	{
    		abort(403, 'Wrong Login');
    	}
    }
}
