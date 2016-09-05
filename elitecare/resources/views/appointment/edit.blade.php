@extends('layouts.app')
<script>
    function validateAppoEditForm(){
        var appointment_title ;
        var is_correct = true ;
        appointment_title = document.getElementById('appointment_title') ;

        if(appointment_title.value.trim().length == 0){
            appointment_title.setAttribute('placeholder', 'Missed To Provide Appointment Title') ;
            is_correct = false ;
        }

        return is_correct ;
    }
</script>
@section('content')

    @include('_error')

    <div class="w3-card-4 w3-margin">
        <div class="w3-container w3-teal w3-center">
            <h2> Appointment</h2>
        </div>
        {!! Form::model($appointment,  array('route' => ['appointment.update', $appointment->id], 'method' => 'PATCH','class' => 'col s12', 'onsubmit' => 'return validateAppoEditForm()')) !!}
        {!! Form::hidden('treatment_id', $appointment->treatment_id) !!}

        @include('appointment.partials._form', array('appointment_time' =>$appointment->appointment_time->format('Y-m-d\TH:i:s') ))

        <button class="w3-btn w3-round w3-blue w3-margin" type="submit">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            &nbsp;UPDATE</button>

       <a href="{{ route('appointment.show', ['treatment_id' =>$appointment->treatment_id]) }}">
            <div class="w3-btn w3-round w3-light-grey w3-margin">
                    <i class="fa fa-times" aria-hidden="true"></i> &nbsp;CANCEL</div>
       </a>
        {!! Form::close() !!}
    </div>
  @endsection