<div class="w3-row-padding">
    <div class="w3-half">
        {!! Form::label('title', 'Title&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
        {!! Form::text('title', null, ['id' =>'appointment_title', 'class' => 'w3-input', 'placeholder' => 'Appointment Title', 'required'=>'true']) !!}
    </div>
    <div class="w3-half">
        {!! Form::label('appointment_time', 'Time&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
        {!! Form::input( 'datetime-local', 'appointment_time',  $appointment_time , ['class'=>'w3-input', 'step'=>'1'] ) !!}
    </div>
    <div class="w3-row-padding">
        {!! Form::label('summary', 'Summary', ['class' =>'w3-label  w3-small']) !!}
        {!! Form::textarea('summary', null, ['class' => 'w3-input', 'placeholder' => 'Appointment Summary', 'rows'=>'2']) !!}
    </div>
