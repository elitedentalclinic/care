@extends('layouts.app')
  <script>
    function showAddForm(){
        var searchResult, addForm ;
        searchResult = document.getElementById('patient_list') ;
        addForm = document.getElementById('add_patient') ;
        addForm.style.display = "block" ;
        searchResult.style.display = "none" ;
    }
  </script>

@section('content')

    @include('_error')

    <div id="patient_list">
           <div class="w3-container">
                @include('patient.partials._search')
           </div>

            @if(Session::has('patient_message'))
                <div class="w3-container  w3-center">
                    <div class="w3-tag w3-round w3-green w3-border w3-border-white">
                        {!! Session::get('patient_message') !!}
                    </div>
                </div>
            @endif

             @if(isset($patients))
                    @if($patients->isEmpty())
                            <div class="w3-container ">
                                @include('patient.partials._search_no_data')
                            </div>
                    @else
                            <div class="w3-container ">
                                @include('patient.partials._patient_data')
                            </div>
                    @endif
             @endif
            <div class="w3-container edc-float-button ">
                    <a class="w3-btn-floating-large w3-teal" onclick="showAddForm()"> +  </a>
            </div>

    </div>


    @if(isset($patient))
        <div class="w3-container edc-no-disply" id="edit_patient">
            @include('patient.partials._edit_patient', array('patient' => $patient))
        </div>
     @else
        <div class="w3-container edc-no-disply "  id="add_patient">
            @include('patient.partials._add_patient')
        </div>
     @endif
@endsection