<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatientRequest extends Request
{
    protected $redirectRoute = 'patient.index' ;

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'birth_date' => 'required|date',
            'sex' => 'required',
            'phone_number' => 'required'
        ];
    }
}
