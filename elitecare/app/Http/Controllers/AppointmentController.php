<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AppointmentRequest ;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $appointments = Appointment::nextWeek()->orderBy('appointment_time', 'ASC')->get()
                                        ->groupBy(function($appointment) {
                                            return Carbon::parse($appointment->appointment_time)->format('Y-M-d');
                                        }) ;

         return view('appointment.index')->with('appointments', $appointments) ;
    }

    public function show($treatment_id)
    {
        $appointments = Treatment::findOrFail($treatment_id)->appointments;
        return view('appointment.show')->with('treatment_id', $treatment_id)->withAppointments($appointments) ;
    }

    public function create(Request $request){
        $treatment_id = $request->get('treatment_id') ;
        return view('appointment.create')->with('treatment_id', $treatment_id) ;
    }

    public function store(AppointmentRequest $request){
        $appointment = Appointment::create($request->all()) ;
        $appointments = Treatment::findOrFail($request->input('treatment_id'))->appointments;
        return view('appointment.show')->with('treatment_id', $request->input('treatment_id'))->withAppointments($appointments) ;
    }
    public function edit(Request $request, $id){
       $appointment = Appointment::findorFail($id) ;
       return view('appointment.edit')->withAppointment($appointment) ;
    }
    public function update(AppointmentRequest $request, $id){
        $appointment =  Appointment::findorFail($id) ;
        $appointment->fill($request->all())->save() ;
        $appointments = Treatment::findOrFail($request->input('treatment_id'))->appointments;
        return view('appointment.show')->with('treatment_id', $request->input('treatment_id'))->withAppointments($appointments) ;
    }

    public function destroy(Request $request, $id){
        Appointment::destroy($id) ;
        $appointments = Treatment::findOrFail($request->input('treatment_id'))->appointments;
        return view('appointment.show')->with('treatment_id', $request->input('treatment_id'))->withAppointments($appointments) ;

    }
}
