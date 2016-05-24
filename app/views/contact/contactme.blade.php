@extends('layout.main')

@section('title') Contact @stop

@section('content')

<div class="container alt1">   
	
	<div class="contact-title contact-header">  Contact </div> 	     
	    <div class="contacts">
	       	<p class="contact-info"><span class="glyphicon glyphicon-envelope"></span> heniboz@gmail.com </p>  
	        <p class="contact-info"><span class="glyphicon glyphicon-phone"></span> +358443645470 </p>
	    </div>
   
    
		<div class=" contact-title contact-header"> About me  </div>
		<div class="am">
			<div class="test-am am-l">
				<div class="am-img">
			    	<img src="{{ asset('images/me3.png') }}" class="img-circle" alt="" width="120" height="120">    
			    </div>
			</div>
			<div class="test-am am-r">
			    <div class="am-details">	    	
			    	<p> My name is Henock Girmachew Mullissa </p>
			    	<p> Software developer, more intersted in web site designing and development with the latest web technologies.</p>
			    </div>
			</div>
        </div>    
  </div>
 @stop