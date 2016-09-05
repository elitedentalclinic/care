<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('home', 'HomeController@index');
Route::post('patient/search',  array('as' => 'patient.search', 'uses' =>'PatientController@search' )) ;
Route::resource('patient', 'PatientController');
Route::get('treatment/complete/{treatment}',  array('as' => 'treatment.complete', 'uses' =>'TreatmentController@complete' )) ;
Route::resource('treatment', 'TreatmentController');
Route::resource('appointment', 'AppointmentController');
