@extends('layouts.app')
@section('content')

    @if($appointments->isEmpty())
        <div class="w3-container w3-center w3-margin">
            <div class="w3-tag w3-large w3-padding w3-orange w3-round-large w3-center">
                <p>No appointment yet..!!!</p>
                <p>Create Appointment with button at bottom</p>
            </div>
        </div>

    @else

    <div class="w3-row-padding">
        @foreach($appointments as $appointment)
              <div class="w3-third w3-margin-bottom">
                   <div class="w3-card-4 {!! $appointment->appointment_time >=\Carbon\Carbon::now() ? "w3-blue-grey" : "w3-lime" !!}">
                        <div class="w3-xlarge edc-s-weight w3-center">{!! $appointment->title !!}</div>
                         <div class="w3-small w3-center">{!! $appointment->appointment_time->format('l, M d, Y  h:i A') !!}</div>
                         <p class="w3-margin">{!! $appointment->summary !!}</p>
                          <footer class="w3-container">
                             <a class="w3-btn w3-blue  w3-round-xxlarge w3-margin-bottom"
                                                                    href="{!! route('appointment.edit',  $appointment->id) !!}">
                                  <i class="fa fa-pencil-square-o" title="edit" aria-hidden="true"></i>
                              </a>
                              <a class="w3-btn w3-theme-l1  w3-round-xxlarge w3-margin-bottom"
                                                            onclick="document.getElementById('appform').submit()" href="#">
                                  <i class="fa fa-trash" title="delete" aria-hidden="true"></i>
                              </a>
                               {{Form::open(array('route'=>['appointment.destroy',$appointment->id], 'method'=>'DELETE' ,  'id'=>'appform'))}}
                              {!! Form::hidden('treatment_id', $treatment_id) !!}
                              {{Form::close()}}
                          </footer>
                   </div>
              </div>
         @endforeach
    </div>

    @endif

    <div class="w3-container edc-float-button ">
        <a class="w3-btn-floating-large w3-green"  href="{!!  route('appointment.create', array('treatment_id'=>$treatment_id))  !!}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    </div>
 @endsection