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

Route::resource('patients', 'PatientController');

Route::resource('doctors', 'DoctorController');

Route::resource('hospitals', 'HospitalController');

Route::get('appointments/patients/{id}', 'AppointmentController@Patient');
Route::get('appointments/doctors/{id}', 'AppointmentController@Doctor');
Route::get('appointments/hospitals/{id}', 'AppointmentController@Hospital');
Route::resource('appointments', 'AppointmentController');

Route::get('visits/doctors/{id}', 'VisitController@Doctor');
Route::get('visits/hospitals/{id}', 'VisitController@Hospital');
Route::resource('visits', 'VisitController');