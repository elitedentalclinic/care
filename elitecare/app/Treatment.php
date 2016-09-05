<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['patient_id', 'headline', 'tooth_number', 'complaint', 'examination', 'treatment','active'];
    protected $casts = ['tooth_number' => 'array'  ];

     public function patient(){
         return $this->belongsTo('App\Patient') ;
     }

    public function appointments(){
        return $this->hasMany('App\Appointment') ;
    }
}
