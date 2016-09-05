@extends('layouts.app')
@section('content')
    <div class="w3-container  w3-blue">
        @include('treatment.partials._header')
    </div>

   @if($treatments->isEmpty())
       <div class="w3-container w3-center w3-margin">
                  <div class="w3-tag w3-large w3-padding w3-orange w3-round-large w3-center">
                      <p>No treatment plan yet..!!!</p>
                      <p>Create treatment plan with button at bottom</p>
                  </div>
       </div>

   @else

    <div class="w3-container">
        @foreach($treatments as $treatment)
            <div class="w3-margin">
                @include('treatment.partials._treatment_plan', array('treatment' => $treatment))
            </div>
        @endforeach
    </div>

   @endif

    <div class="w3-container edc-float-button ">
            <a class="w3-btn-floating-large w3-red"  href="{!!  route('treatment.create') !!}">
                    <i class="fa fa-stethoscope" aria-hidden="true"></i>
            </a>
     </div>

@endsection