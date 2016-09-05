@extends('layouts.app')
<script>
function makeVisible(id){
	var add_appoitment, list_appoitment, intital_content ;
	add_appoitment = document.getElementById('add_appoitment') ; 
	list_appoitment = document.getElementById('list_appoitment') ; 
	intital_content = document.getElementById('intital_content') ;

	intital_content.style.display = "none" ;
	add_appoitment.style.display = "none" ;
	list_appoitment.style.display = "none" ;
	
	var currentview = document.getElementById(id) ; 
	currentview.style.display = "block" ; 
	
}
function validateAppoForm(){
    var appo_title, appo_details ;
    var is_correct = true ;
    appo_title = document.getElementById('appo_title') ;
    appo_details = document.getElementById('appo_details') ;
    intital_content = document.getElementById('intital_content') ;
   
    if(appo_title.value.trim().length == 0){
    	appo_title.setAttribute('placeholder', 'Missed To Provide Appointment Title') ;
    	appo_title.value = "" ;
     	is_correct = false ;
    }

   if(is_correct == true){
	   add_appoitment.style.display = "none" ;
	   intital_content.style.display = "block" ;
   }
  return false ;
}

function showDescription(id){
   var currentview = document.getElementById(id) ; 
       currentview.style.display = "block" ; 
}

function enableArea(id){
	 document.getElementById(id).disabled='';
}

function hideElement(id){
	   var currentview = document.getElementById(id) ; 
	       currentview.style.display = "none" ; 
	}
</script>
@section('content')
 <div class="container">
    <div class="header-holder"></div>
    <div class="row">
    	<div class="col s6">
    	   <div class="heading">Riju Jacob</div>
    	   <div class="sub-heading">1234567</div>
    	</div>
    	<div class="col s6">
           	<div class="sub-heading">36, Male </div>
           	<div>+91 9945222551</div>
           	<div class="sub-heading">riju.jacob@gmail.com</div>
        </div>
    </div>
    <div class="divider"></div>
     <iframe name="votar" style="display:none;"></iframe>
    <div class="raw add-patient" id="add_case">
        <form class="col s12">
           <div class="row">
                <div class="input-field col s6">
                   <input placeholder="Case Title" id="case_title" type="text" class="validate">
                   <label for="case_title" class="active">Case Title</label>
                </div>
                 <div class="input-field col s3">
    	              <input type="date" class="datepicker" id="case_date" name="case_date" value="<?php echo date("Y-m-d");?>">
                      <label class="active" for="case_date">Date&#42;</label>
    	        </div>
           </div>
           <div class="row">
             <div class="col s4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Save </button>
  			  <a class="btn waves-effect waves-teal blue lighten-3" onClick="hideElement('add_case')">Cancel</a>
  			 </div> 
          </div>
        </form>
    </div> 
    <div class="card blue-grey darken-1">
    	 <div class="card-content white-text">
    	   <div id="intital_content">
    	  	<div class="appo-header">Root Canal</div>
    	   	<div class="appo-subheader">12-May-2016</div>
    	  </div>  
    	  <div id ="add_appoitment" class="add-patient">
    	      <div class="row">
    	         <form class="col s12" action="#" id="appo_add_form" method="post" onsubmit="return validateAppoForm()" target="votar">
    	             <div class="row">
    	                 <div class="input-field col s9">
    	                      <input placeholder="Title" id="appo_title" type="text" class="validate">
    	                      <label for="appo_title" class="active">Title&#42;</label>
    	                 </div>
    	                 <div class="input-field col s3">
    	                      <input type="date" class="datepicker" id="appo_date" name="birth_date" value="<?php echo date("Y-m-d");?>">
                    		  <label class="active" for="appo_date">Date&#42;</label>
    	                 </div>
    	             </div>
    	              <div class="row">
    	                 <div class="input-field col s9">
    	                    <textarea id="appo_details" class="materialize-textarea"></textarea>
          					<label for="appo_details" class="active">Appointment Details</label>
    	                 </div>
    	              </div>
    	              <div class="row">
    	                <div class="col s2">
    	                 <button class="btn waves-effect waves-light" type="submit" name="action">Add
    						<i class="material-icons right">add</i>
  						 </button>
  						</div> 
  						 <div class="col s2">
      		    			 <a class="btn waves-effect waves-teal blue lighten-3"  onClick="makeVisible('intital_content')">Cancel</a>
      					 </div>
    	              </div>
    	         </form>
    	       </div>
    	   </div>
    	   <div id ="list_appoitment" class="add-patient">
    	      <div class="collection">
        		  <a href="#" class="collection-item" onClick="showDescription('1234')">
        		     <span class="appoint-list-head">First Sitting</span>
        		     <span class="right">18-Mar-2016</span>
        		  </a>
        		   	<div class="card add-patient" id="1234">
        		   	 <form>
        		   	   <div class="card-content">
        		   	      <div class="input-field col s8 offset-s2">
        		    	   <textarea id="1234_hist" class="materialize-textarea blue-text"  disabled>
        		    	 	Here is a color palette based on the material design base colors.Each of these colors is defined with a base color class and an optional lighten or darken class.
        		    	   </textarea>	
        		    	 </div>
        		   	  </div>
        		   	  <div class="card-action">
        		   	      <a class="btn-floating btn-small waves-effect waves-light red app-btn-space" onClick="enableArea('1234_hist')">
    	      			  <i class="material-icons">edit</i></a>
    	      			  <button class="btn waves-effect waves-light" type="submit" name="action">Save </button>
  						  <a class="btn waves-effect waves-teal blue lighten-3" onClick="hideElement('1234')">Cancel</a>
        		   	  </div>
        		   	 </form> 
        		  </div>
        		  <a href="#!" class="collection-item">
        		     <span class="appoint-list-head">Cleaning and Extraction</span>
        		     <span class="right">20-Mar-2016</span>
        		  </a>
        		  <a href="#!" class="collection-item">
        		     <span class="appoint-list-head">Root Canal</span>
        		     <span class="right">21-Mar-2016</span>
        		  </a>
        		  <a href="#!" class="collection-item">
        		     <span class="appoint-list-head">Crown Measurment</span>
        		     <span class="right">25-Mar-2016</span>
        		  </a>
        		  <a href="#!" class="collection-item">
        		     <span class="appoint-list-head">Crown Fixing</span>
        		     <span class="right">31-Mar-2016</span>
        		  </a>
        	</div>
    	   </div>
    	  </div> 
      	 <div class="card-action">
    	      <a class="btn-floating btn-medium waves-effect waves-light blue lighten-3 app-btn-space" onClick="makeVisible('add_appoitment')">
    	      <i class="material-icons">add</i></a>
              <a class="btn-floating btn-medium waves-effect waves-light grey darken-1 app-btn-space" onClick="makeVisible('list_appoitment')">
              <i class="material-icons">visibility</i></a>
               <a class="btn-floating btn-medium waves-effect waves-light pink darken-1 app-btn-space"><i class="material-icons">done</i></a>
    	 </div>
    </div>
    <div class="card lime darken-1">
    	 <div class="card-content">
    	   	<div class="appo-header blue-text">Implant</div>
    	   	 <div class="appo-subheader blue-text">18-Dec-2014</div>
    	 </div>
    	 <div class="card-action">
    	    <a class="btn-floating btn-medium waves-effect waves-light grey darken-1 app-btn-space">
            <i class="material-icons">restore</i></a>
    	    
    	 </div>
    </div>
    <div class="floatbutton">
           <a class="btn-floating btn-large waves-effect waves-light blue" href="#" onClick="showDescription('add_case')">
           <i class="material-icons">note_add</i></a>
        </div>
 </div>
@endsection