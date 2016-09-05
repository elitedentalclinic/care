@extends('layouts.app')
@section('content')

    @include('_error')

    <div class="w3-card-4 w3-margin">
        <div class="w3-container w3-teal w3-center">
               <h2>Treatment</h2>
        </div>

         {!! Form::open(array('route' => 'treatment.store', 'class' => 'w3-container', 'onsubmit' => 'return validateTreatForm()')) !!}

                 @include('treatment.partials._new_form')

                <button id="btn-treatment-sub" class="w3-btn w3-round w3-blue w3-margin" type="submit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    &nbsp;CREATE</button>

                <a href="{{ route('treatment.show', ['patient_id' =>$patient_id]) }}">
                    <div class="w3-btn w3-round w3-light-grey w3-margin">
                        <i class="fa fa-times" aria-hidden="true"></i> &nbsp;CANCEL</div>
                </a>
        {!! Form::close() !!}
    </div>
@endsection