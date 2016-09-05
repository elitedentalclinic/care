<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests\PatientRequest ;
use Illuminate\Support\Facades\Redirect;


class PatientController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
     	return view('patient.index') ;
	}

	public function search(Request $request){
		$search_text =  $request->input('search_text') ;
		$patients = Patient::search($search_text)->get()  ;
	    return view('patient.index')->with('patients', $patients) ;
    }

	public function store(PatientRequest $request){
	    $patient = Patient::create($request->all()) ;
		$patients = collect([$patient]) ;
		\Session::flash('patient_message', 'Patient Registered Successfully') ;
		return view('patient.index')->with('patients', $patients) ;
     }

	public function edit($id){
		$patient = Patient::findOrFail($id) ;
	    return view('patient.index')->withPatient($patient) ;
	}

	public function update(PatientRequest $request, $id){
             $patient = Patient::findorFail($id) ;
		     $patient->fill($request->all())->save() ;
		    $patients = collect([$patient]) ;
		   return view('patient.index')->with('patients', $patients) ;
    }
}