<script>
    function makeVisible(id)
    {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-red";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                    x.previousElementSibling.className.replace("w3-red", "");
        }

    }

</script>
<div class="w3-card-4 w3-hoverable w3-accordion {!!  $treatment->active?'w3-blue-grey':'w3-lime' !!}" >
    <div class="w3-container w3-center">
        <div class="edc-s-weight  w3-jumbo">{!! $treatment->headline !!}</div>
        <div>{!! $treatment->created_at->formatLocalized('%A,  %B %d, %Y')  !!}</div>
     </div>

    <footer class="w3-container">
        @if($treatment->active)
           <a class="w3-btn w3-blue  w3-round-xxlarge w3-margin-bottom"
                                 href ="{{ route('appointment.show', $treatment->id) }}">
                 <i class="fa fa-calendar-minus-o"  title="Appointment" aria-hidden="true"></i>
           </a>
            <a class="w3-btn w3-green  w3-round-xxlarge w3-margin-bottom"
                           href="{{ route('treatment.complete', $treatment->id) }}">
                <i class="fa fa-check-square-o" title="Complete" aria-hidden="true"></i>
            </a>
        @endif
            <a class="w3-btn w3-purple  w3-round-xxlarge w3-margin-bottom"
                                  onclick="makeVisible({!!$treatment->id !!})">
               <i class="fa fa-low-vision" title="Details" aria-hidden="true"></i>
            </a>
    </footer>
</div>
<div class="w3-accordion-content w3-card-4" id="{!!  $treatment->id !!}">
       <div class="w3-row">
             <div class="w3-quarter">
                 <span class="w3-tag edc-margin">Tooth Number</span>
             </div>
             <div class="w3-threequarter">
                 <span class="w3-tag w3-teal edc-margin">{!! implode(",",  $treatment->tooth_number)  !!}</span>
             </div>

       </div>

    <div class="w3-row">
        <div class="w3-quarter">
            <span class="w3-tag edc-margin">Complaint</span>
        </div>
        <div class="w3-threequarter">
            <span class="w3-tag w3-teal edc-margin">  {!! $treatment->complaint  !!}</span>
        </div>
    </div>

    <div class="w3-row">
        <div class="w3-quarter">
            <span class="w3-tag  edc-margin">Examination</span>
        </div>
        <div class="w3-threequarter">
            <span class="w3-tag w3-teal edc-margin"> {!! $treatment->examination  !!}</span>
        </div>
    </div>

    <div class="w3-row">
        <div class="w3-quarter">
            <span class="w3-tag  edc-margin">Treatment</span>
        </div>
        <div class="w3-threequarter">
            <span class="w3-tag w3-teal edc-margin"> {!! $treatment->treatment  !!}</span>
        </div>
    </div>
    @if($treatment->active)
         <footer class="w3-light-blue">
             <a href="{{ route('treatment.edit', $treatment->id) }}">
                 <i class="fa fa-pencil-square-o fa-2x" title="edit" aria-hidden="true"></i>
             </a>
         </footer>
     @endif
</div>
