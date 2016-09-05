<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $dates = ['appointment_time'];
    protected $fillable = ['treatment_id', 'appointment_time', 'title', 'summary'];

    public function treatment()
    {
       return  $this->belongsTo('App\Treatment');
    }

    public function setAppointmentTimeAttribute($date)
    {
        $this->attributes['appointment_time'] = Carbon::createFromFormat('Y-m-d\TH:i:s', $date);
    }

    public function scopeNextweek($query)
    {
        return $query->where(function ($timequery) {
            $timequery->whereDate('appointment_time', '>=', Carbon::today());
            $timequery->whereDate('appointment_time', '<=', Carbon::today()->addWeekdays(5));
        });
    }

}
