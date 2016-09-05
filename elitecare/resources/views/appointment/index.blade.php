@extends('layouts.app')
@section('content')
        <div class="w3-container">
            @foreach($appointments->keys()  as $key)
                 <div class="w3-tag w3-blue">{!!\Carbon\Carbon::parse($key)->toFormattedDateString() !!}</div>
                    <ul class="w3-ul w3-card-4 w3-hoverable">
                          @foreach($appointments->get($key) as $appointment)
                            <li class="w3-padding-hor-10 w3-hover-khaki" >
                                <a href="{{ route('appointment.edit',  $appointment->id) }}">
                                <i class="material-icons w3-xxxlarge w3-left w3-circle w3-green w3-margin-right">person</i>
                                <div class="w3-row">
                                    <div class="w3-col l5 s4">
                                        <div class="w3-xlarge w3-text-blue">{!! $appointment->treatment->patient->name !!}</div>
                                        <div class="w3-small">{!! $appointment->treatment->patient->birth_date->age !!},  {!! ucfirst($appointment->treatment->patient->sex) !!}</div>
                                        <div class="w3-small">{!! $appointment->treatment->patient->phone_number !!}</div>
                                    </div>
                                 <div class="w3-col l5 s4">
                                    <div class="w3-xlarge w3-text-blue">{!! $appointment->appointment_time->format('h:i A') !!}</div>
                                </div>
                               </div>
                                 </a>
                             </li>
                         @endforeach
                     </ul>
             @endforeach
        </div>
  @endsection