<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AppointmentRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
           'title' => 'required',
            'appointment_time' => 'required'
        ];
    }
}
