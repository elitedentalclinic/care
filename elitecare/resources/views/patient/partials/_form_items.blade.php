<div class="w3-row-padding">
    <div class="w3-half">
        {!! Form::label('name', 'Name&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
        {!! Form::text('name', null, ['id' => 'patient_name', 'class' => 'w3-input w3-text-teal w3-large', 'placeholder' => 'Provide Patient Name', 'required'=>'true']) !!}
     </div>
    <div class="w3-half">
        {!! Form::label('registration_no', 'Registration No', ['class' =>'w3-label w3-small']) !!}
        <p><span class="w3-tag w3-blue w3-large">{!! $registration_no !!}</span></p>
        {!! Form::hidden('registration_no', $registration_no) !!}
    </div>
</div>

<div class="w3-row-padding">
    <div class="w3-third">
        {!! Form::label('phone_number', 'Phone Number&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
        {!! Form::text('phone_number', null, ['id' =>'patient_ph', 'class' => 'w3-input', 'placeholder' => 'Provide Patient Phone Number', 'required'=>'true']) !!}
      </div>
     <div class="w3-third">
        {!! Form::label('birth_date', 'Birth Date&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
        {!! Form::date('birth_date', $birth_date, ['id' => 'birth_date', 'class'=>'w3-input']) !!}
      </div>
    <div class="w3-third">
           {!! Form::label('sex', 'Gender&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
           <span>
                  {!! Form::radio('sex', 'male', null, ['id' => 'male', 'class'=>'w3-radio']) !!}
                  {!! Form::label('male', 'Male', ['class'=>'w3-validate']) !!}
            </span>
            <span>
                  {!! Form::radio('sex', 'female', null, ['id' => 'female', 'class'=>'w3-radio']) !!}
                  {!! Form::label('female', 'Female', ['class'=>'w3-validate']) !!}
             </span>
    </div>
 </div>

<div class="w3-row-padding">
    <div class="w3-half">
        {!! Form::label('email', 'E-Mail', ['class' =>'w3-label w3-small']) !!}
        {!! Form::email('email', null, ['class' => 'w3-input', 'placeholder' => 'Provide Patient E-Mail']) !!}
    </div>
    <div class="w3-half">
        {!! Form::label('address', 'Patient Address', ['class' =>'w3-label w3-small']) !!}
        {!! Form::textarea('address', null, ['class' => 'w3-input', 'rows'=>'3']) !!}
    </div>
</div>

