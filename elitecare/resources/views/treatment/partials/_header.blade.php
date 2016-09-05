<div class="w3-row-padding">
    <div class="w3-half">
        <div class="w3-xlarge">{!! $patient->name !!}</div>
         <div class="w3-small">{!! $patient->registration_no !!}</div>
    </div>
    <div class="w3-half ">
        <div class="w3-small">{!! $patient->birth_date->age !!}, {!! ucfirst($patient->sex) !!} </div>
        <div>{!! $patient->phone_number !!}</div>
        <div class="w3-small">{!! $patient->email !!}</div>
    </div>
</div>
