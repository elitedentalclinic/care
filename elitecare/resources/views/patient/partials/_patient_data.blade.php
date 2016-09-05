<ul class="w3-ul w3-card-4 w3-hoverable">
    @foreach($patients as $patient)
        <li class="w3-padding-hor-10" >
            <a href="{{ route('treatment.show',  array('patient_id' =>$patient->id)) }}">
                 <i class="material-icons w3-xxxlarge w3-left w3-circle w3-green w3-margin-right">person</i>
            <div class="w3-row">
                  <div class="w3-col l5 s4">
                      <div class="w3-xlarge w3-text-blue">{!! $patient->name !!}</div>
                      <div class="w3-small">{!! $patient->registration_no !!}</div>
                  </div>

                <div class="w3-col l3 s2">
                    <div class="w3-small">{!!  $patient->birth_date->age !!}, {!! ucfirst($patient->sex) !!}</div>
                    <div>{!! $patient->phone_number !!}</div>
                    <div class="w3-small">{!! $patient->email !!}</div>
                </div>

                <div class="w3-col l1 s1 w3-right we-margin-right fa-2x ">
                    <a href="{{ route('patient.edit', $patient->id) }} ">
                            <i class="fa fa-pencil-square-o w3-text-blue w3-hover-text-green" aria-hidden="true"></i>
                     </a>
                </div>
           </div>
            </a>
        </li>
    @endforeach
</ul>
