<script>
    function closeAddForm(){
        var searchResult, addForm ;
        searchResult = document.getElementById('patient_list') ;
        addForm = document.getElementById('add_patient') ;
        addForm.style.display = "none" ;
        searchResult.style.display = "block" ;
    }

    function validateRegiForm(){
         var patient_name, birth_date, patient_ph,sub_button ;
        var is_correct = true ;
        patient_name = document.getElementById('patient_name') ;
        birth_date = document.getElementById('birth_date') ;
        patient_ph = document.getElementById('patient_ph') ;
        sub_button = document.getElementById('patient-form') ;

         if(patient_name.value.trim().length == 0){
            patient_name.setAttribute('placeholder', 'Missed To Provide Patient Name') ;
            is_correct = false ;
        }

        if(patient_ph.value.trim().length == 0){
            patient_ph.setAttribute('placeholder', 'Missed To Provide Patient Phone Number') ;
            is_correct = false ;
        }

        if(is_correct)
        {
            sub_button.disabled = true ;
        }

        return is_correct ;
    }
</script>

<div class="w3-card-4">
    <div class="w3-container w3-teal w3-center">
        <h2>Registration</h2>
    </div>

    {!! Form::open( array('route' => 'patient.store', 'class' =>'w3-container', 'onsubmit' => 'return validateRegiForm()' )) !!}

        @include('patient.partials._form_items', array('registration_no' => \Carbon\Carbon::now()->timestamp, 'birth_date' => null))

        <button id="patient-form" class="w3-btn w3-round w3-blue w3-margin" type="submit">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            &nbsp;REGISTER</button>
        <button class="w3-btn w3-round w3-light-grey w3-margin" onClick="closeAddForm()">
            <i class="fa fa-times" aria-hidden="true"></i>
            &nbsp;CANCEL</button>
    {!! Form::close() !!}
</div>

