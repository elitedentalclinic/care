{!! Form::open(array('route' => 'patient.search', 'class' =>'w3-container')) !!}
        <div class="w3-row ">
                <div class="w3-half">
                        {!! Form::label('search_text', 'Patient Name|ID|Phone Number', array('class'=>'w3-small')) !!}
                        {!! Form::text('search_text', null, array('class' => 'w3-input')) !!}
                </div>
                <div class="w3-half">
                        <button class="w3-btn w3-teal edc-src-btn w3-hover-pink" >
                                <i class="fa fa-search w3-large"></i>&nbsp;Search
                        </button>
                </div>
        </div>
{!! Form::close() !!}
