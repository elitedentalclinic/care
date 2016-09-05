<script>
    function showEditForm(){
        var searchResult, editForm ;
        searchResult = document.getElementById('patient_list') ;
        editForm = document.getElementById('edit_patient') ;
        editForm.style.display = "block" ;
        searchResult.style.display = "none" ;
    }

    function closeEditForm(){
        var searchResult, editForm ;
        searchResult = document.getElementById('patient_list') ;
        editForm = document.getElementById('edit_patient') ;
        editForm.style.display = "none" ;
        searchResult.style.display = "block" ;
    }

    function validateUpdateForm(){
        var patient_name, birth_date, patient_ph ;
        var is_correct = true ;

       patient_name = document.getElementById('patient_name') ;
        birth_date = document.getElementById('birth_date') ;
        patient_ph = document.getElementById('patient_ph') ;

       if(patient_name.value.trim().length == 0){
            patient_name.setAttribute('placeholder', 'Missed To Provide Patient Name') ;
            is_correct = false ;
        }

        if(patient_ph.value.trim().length == 0){
            patient_ph.setAttribute('placeholder', 'Missed To Provide Patient Phone Number') ;
            is_correct = false ;
        }

        return is_correct ;
    }
    window.onload = showEditForm();
</script>

<div class="w3-card-4">
    <div class="w3-container w3-teal w3-center">
        <h2>  Registration Update</h2>
    </div>

     {!! Form::model($patient,  array('route' => ['patient.update', $patient->id], 'method' => 'PATCH',  'class' =>'w3-container', 'onsubmit' => 'return validateUpdateForm()' )) !!}

    @include('patient.partials._form_items', array('registration_no' =>$patient->registration_no, 'birth_date' => $patient->birth_date ))

    <button class="w3-btn w3-round w3-blue w3-margin" type="submit">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        &nbsp;UPDATE</button>
    <button class="w3-btn w3-round w3-light-grey w3-margin" onClick="closeEditForm()">
        <i class="fa fa-times" aria-hidden="true"></i>
        &nbsp;CANCEL</button>
    {!! Form::close() !!}
</div>
