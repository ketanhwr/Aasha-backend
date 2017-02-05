<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('db/patients', 'PatientController');

Route::resource('db/doctors', 'DoctorController');

Route::resource('db/hospitals', 'HospitalController');

Route::get('db/appointments/patients/{id}', 'AppointmentController@Patient');
Route::get('db/appointments/doctors/{id}', 'AppointmentController@Doctor');
Route::get('db/appointments/hospitals/{id}', 'AppointmentController@Hospital');
Route::resource('db/appointments', 'AppointmentController');

Route::get('db/visits/doctors/{id}', 'VisitController@Doctor');
Route::get('db/visits/hospitals/{id}', 'VisitController@Hospital');
Route::resource('db/visits', 'VisitController');

Route::post('db/login', 'LoginController@index');