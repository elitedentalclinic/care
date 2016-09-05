<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TreatmentRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'headline' => 'required',
            'complaint' =>'required'
        ];
    }
}
