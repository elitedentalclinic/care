<?php

namespace App\Http\Controllers;

use App\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Patient ;
use App\Http\Requests\TreatmentRequest ;


class TreatmentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($patient_id)
    {
        $patient = Patient::findOrFail($patient_id) ;
        session(['patient_id' => $patient->id]);
        $treatments = Patient::findOrFail($patient_id)->treatments ;
        return view('treatment.show')->withPatient($patient)->withTreatments($treatments) ;
    }

    public function create(Request $request)
    {
             return view('treatment.create')->with('patient_id', $request->session()->get('patient_id')) ;
    }

    public function store(TreatmentRequest $request){
        if(! isset( $request['tooth_number'] )){
            $request['tooth_number'] = ['0'] ;
        }
        $treatment = Treatment::create($request->all()) ;
           $patient = Patient::findOrFail($request->session()->get('patient_id')) ;
           $treatments = Patient::findOrFail($request->session()->get('patient_id'))->treatments ;
           return view('treatment.show')->withPatient($patient)->withTreatments($treatments) ;
    }

    public function edit(Request $request, $id){
        $treatment = Treatment::findorFail($id) ;
         return view('treatment.edit')->withTreatment($treatment)->with('patient_id', $request->session()->get('patient_id')) ;
    }

    public function update(TreatmentRequest $request, $id){
        if(! isset( $request['tooth_number'] )){
            $request['tooth_number'] = ['0'] ;
        }
        $treatment =  Treatment::findorFail($id) ;
        $treatment->fill($request->all())->save() ;
        $patient = Patient::findOrFail($request->session()->get('patient_id')) ;
        $treatments = Patient::findOrFail($request->session()->get('patient_id'))->treatments ;
        return view('treatment.show')->withPatient($patient)->withTreatments($treatments) ;
   }

    public function complete(Request $request, $id){
        $treatment = Treatment::find($id) ;
        $treatment->active = false ;
        $treatment->save() ;
        $patient = Patient::findOrFail($request->session()->get('patient_id')) ;
        $treatments = Patient::findOrFail($request->session()->get('patient_id'))->treatments ;
        return view('treatment.show')->withPatient($patient)->withTreatments($treatments) ;
    }

  }
