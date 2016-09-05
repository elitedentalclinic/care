<script>
    function validateTreatForm(){
         var treatment_head, btn_treatment_sub ;
            var is_correct = true ;
            treatment_head = document.getElementById('treatment_headline') ;
            btn_treatment_sub =  document.getElementById('btn-treatment-sub') ;

            if(treatment_head.value.trim().length == 0){
                treatment_head.setAttribute('placeholder', 'Missed To Provide Treatment Headline') ;
                is_correct = false ;
            }

            if(is_correct){
                btn_treatment_sub.disabled = true ;
            }

           return is_correct ;
    }
</script>
{!! Form::hidden('patient_id', $patient_id) !!}
{!! Form::label('tooth', 'Tooth', ['class' =>'w3-label w3-small']) !!}

<div class="w3-row-padding">
    <div class="w3-half">
        {!! Form::checkbox('tooth_number[]', 14, null, ['class'=>'w3-check', 'id'=>'tooth-number-14']) !!}
        {!! Form::label('tooth-number-14', '14') !!}
        {!! Form::checkbox('tooth_number[]', 13, null, ['class'=>'w3-check', 'id'=>'tooth-number-13']) !!}
        {!! Form::label('tooth-number-13', '13') !!}
        {!! Form::checkbox('tooth_number[]', 12, null, ['class'=>'w3-check', 'id'=>'tooth-number-12']) !!}
        {!! Form::label('tooth-number-12', '12') !!}
        {!! Form::checkbox('tooth_number[]', 11, null, ['class'=>'w3-check', 'id'=>'tooth-number-11']) !!}
        {!! Form::label('tooth-number-11', '11') !!}
        {!! Form::checkbox('tooth_number[]', 18, null, ['class'=>'w3-check', 'id'=>'tooth-number-18']) !!}
        {!! Form::label('tooth-number-18', '18') !!}
        {!! Form::checkbox('tooth_number[]', 17, null, ['class'=>'w3-check', 'id'=>'tooth-number-17']) !!}
        {!! Form::label('tooth-number-17', '17') !!}
        {!! Form::checkbox('tooth_number[]', 16, null, ['class'=>'w3-check', 'id'=>'tooth-number-16']) !!}
        {!! Form::label('tooth-number-16', '16') !!}
        {!! Form::checkbox('tooth_number[]', 15, null, ['class'=>'w3-check', 'id'=>'tooth-number-15']) !!}
        {!! Form::label('tooth-number-15', '15') !!}

   </div>
    <div class="w3-half">
        {!! Form::checkbox('tooth_number[]', 21, null, ['class'=>'w3-check', 'id'=>'tooth-number-21']) !!}
        {!! Form::label('tooth-number-21', '21') !!}
        {!! Form::checkbox('tooth_number[]', 22, null, ['class'=>'w3-check', 'id'=>'tooth-number-22']) !!}
        {!! Form::label('tooth-number-22', '22') !!}
        {!! Form::checkbox('tooth_number[]', 23, null, ['class'=>'w3-check', 'id'=>'tooth-number-23']) !!}
        {!! Form::label('tooth-number-23', '23') !!}
        {!! Form::checkbox('tooth_number[]', 24, null, ['class'=>'w3-check', 'id'=>'tooth-number-24']) !!}
        {!! Form::label('tooth-number-24', '24') !!}
        {!! Form::checkbox('tooth_number[]', 25, null, ['class'=>'w3-check', 'id'=>'tooth-number-25']) !!}
        {!! Form::label('tooth-number-25', '25') !!}
        {!! Form::checkbox('tooth_number[]', 26, null, ['class'=>'w3-check', 'id'=>'tooth-number-26']) !!}
        {!! Form::label('tooth-number-26', '26') !!}
        {!! Form::checkbox('tooth_number[]', 27, null, ['class'=>'w3-check', 'id'=>'tooth-number-27']) !!}
        {!! Form::label('tooth-number-27', '27') !!}
        {!! Form::checkbox('tooth_number[]', 28, null, ['class'=>'w3-check', 'id'=>'tooth-number-28']) !!}
        {!! Form::label('tooth-number-28', '28') !!}
    </div>
</div>
<div class="w3-row-padding">
    <div class="w3-half">
        {!! Form::checkbox('tooth_number[]', 44, null, ['class'=>'w3-check', 'id'=>'tooth-number-44']) !!}
        {!! Form::label('tooth-number-44', '44') !!}
        {!! Form::checkbox('tooth_number[]', 43, null, ['class'=>'w3-check', 'id'=>'tooth-number-43']) !!}
        {!! Form::label('tooth-number-43', '43') !!}
        {!! Form::checkbox('tooth_number[]', 42, null, ['class'=>'w3-check', 'id'=>'tooth-number-42']) !!}
        {!! Form::label('tooth-number-42', '42') !!}
        {!! Form::checkbox('tooth_number[]', 41, null, ['class'=>'w3-check', 'id'=>'tooth-number-41']) !!}
        {!! Form::label('tooth-number-41', '41') !!}
        {!! Form::checkbox('tooth_number[]', 48, null, ['class'=>'w3-check', 'id'=>'tooth-number-48']) !!}
        {!! Form::label('tooth-number-48', '48') !!}
        {!! Form::checkbox('tooth_number[]', 47, null, ['class'=>'w3-check', 'id'=>'tooth-number-47']) !!}
        {!! Form::label('tooth-number-47', '47') !!}
        {!! Form::checkbox('tooth_number[]', 46, null, ['class'=>'w3-check', 'id'=>'tooth-number-46']) !!}
        {!! Form::label('tooth-number-46', '46') !!}
        {!! Form::checkbox('tooth_number[]', 45, null, ['class'=>'w3-check', 'id'=>'tooth-number-45']) !!}
        {!! Form::label('tooth-number-45', '45') !!}
     </div>
    <div class="w3-half">
        {!! Form::checkbox('tooth_number[]', 31, null, ['class'=>'w3-check', 'id'=>'tooth-number-31']) !!}
        {!! Form::label('tooth-number-31', '31') !!}
        {!! Form::checkbox('tooth_number[]', 32, null, ['class'=>'w3-check', 'id'=>'tooth-number-32']) !!}
        {!! Form::label('tooth-number-32', '32') !!}
        {!! Form::checkbox('tooth_number[]', 33, null, ['class'=>'w3-check', 'id'=>'tooth-number-33']) !!}
        {!! Form::label('tooth-number-33', '33') !!}
        {!! Form::checkbox('tooth_number[]', 34, null, ['class'=>'w3-check', 'id'=>'tooth-number-34']) !!}
        {!! Form::label('tooth-number-34', '34') !!}
        {!! Form::checkbox('tooth_number[]',35 , null, ['class'=>'w3-check', 'id'=>'tooth-number-35']) !!}
        {!! Form::label('tooth-number-35', '35') !!}
        {!! Form::checkbox('tooth_number[]', 36, null, ['class'=>'w3-check', 'id'=>'tooth-number-36']) !!}
        {!! Form::label('tooth-number-36', '36') !!}
        {!! Form::checkbox('tooth_number[]', 37, null, ['class'=>'w3-check', 'id'=>'tooth-number-37']) !!}
        {!! Form::label('tooth-number-37', '37') !!}
        {!! Form::checkbox('tooth_number[]', 38, null, ['class'=>'w3-check', 'id'=>'tooth-number-38']) !!}
        {!! Form::label('tooth-number-38', '38') !!}
    </div>
</div>

 <div class="w3-margin">
     {!! Form::label('headline', 'Treatment headline&#42;', ['class' =>'w3-label w3-validate w3-small']) !!}
     {!! Form::text('headline', null, ['id' =>'treatment_headline', 'class' => 'w3-input', 'placeholder' => 'Treatment headline', 'required'=>'true']) !!}
 </div>

  <div class="w3-row-padding">
        <div class="w3-half">
            {!! Form::label('complaint', 'Complaint&#42;', ['class' =>'w3-label w3-small']) !!}
            {!! Form::textarea('complaint', null, ['class' => 'w3-input', 'placeholder' => 'Patient Complaint', 'rows'=>'4']) !!}
        </div>
        <div class="w3-half">
            {!! Form::label('examination', 'Examination', ['class' =>'w3-label w3-small']) !!}
            {!! Form::textarea('examination', null, ['class' => 'w3-input', 'placeholder' => 'Examination Details', 'rows'=>'4']) !!}
        </div>
   </div>
    <div class="w3-margin">
        {!! Form::label('treatment', 'Treatment', ['class' =>'w3-label w3-small']) !!}
        {!! Form::textarea('treatment', null, ['class' => 'w3-input', 'placeholder' => 'Treatment Details', 'rows'=>'2']) !!}
    </div>

