@extends('layouts.main')

@section('title') Contact @stop

@section('content')

<div class="container alt1">   
	
	<div class="contact-title contact-header">  Contact </div> 	     
	    <div class="contacts">
	       	<p class="contact-info"><span class="glyphicon glyphicon-envelope"></span> heniboz@gmail.com </p>  
	        <p class="contact-info"><span class="glyphicon glyphicon-phone"></span> +358443645470 </p>
	    </div>
   
    
		<div class=" contact-title contact-header"> About me  </div>

		<div class="contact-me">

			<div class="contact-me-img">			
			    	<img src="{{ asset('images/me3.png') }}" class="img-circle" alt="" width="120" height="120">    	    
			</div>

			<div class="contact-me-desc">		    	    	
			    	<p> 
			    	I am software developer, more intersted in web development with the latest technologies. </p>	    
			</div>
        </div>    
  </div>
 @stop