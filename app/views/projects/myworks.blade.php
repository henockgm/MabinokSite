@extends('layouts.main')

@section('title') Recent Projects @stop

@section('content')	
   
 <div class="container projects-container"> 
	<div class="project1">
		
		<div class="mainText"> <h3 class="display-3">  Raisoft Oy Ltd. </h3>
			During my work in Raisoft Oy I had been tasked to a plan, design and develop a software tool named 
			“Feature Editor” for the congiguration of feature sets of Raisoft's software products. The functionalities of the tool
			included editing, adding,removing and mapping features in to a given version of product. I used CodGear Delphi development tool 
			 and object pascal as programming language. Mercurial was used as revision-control tool.
			I had also been working as a software tester for first few months of my work period in Raisoft. </div>

		<div id="projectSlider1" class="carousel slide" data-ride="carousel" >
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#projectSlider1" data-slide-to="0" class="active"></li>
		    <li data-target="#projectSlider1" data-slide-to="1"></li>
		    <li data-target="#projectSlider1" data-slide-to="2"></li>
		    <li data-target="#projectSlider1" data-slide-to="3"></li>
		    <li data-target="#projectSlider1" data-slide-to="4"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<div class="item active"><img src="{{ URL::to('/images/project1-1.png') }}" alt="Feature Mapping"></div>
			<div class="item"><img src="{{ URL::to('/images/project1-2.png') }}" alt="Feature Mapping"></div>
			<div class="item"><img src="{{ URL::to('/images/project1-3.png') }}" alt="Feature Editor Form"></div>
			<div class="item"><img src="{{ URL::to('/images/project1-4.png') }}" alt="Supplement Mapping"></div>
			<div class="item"><img src="{{ URL::to('/images/project1-5.png') }}" alt="Version Setting"></div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#projectSlider1" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#projectSlider1" role="button" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		  </div>
		</div> 
	</div><!-- /  -->

	<div class="project2">
		
		<div class="mainText"> <h3 class="display-3">  Jylistys  </h3>
			Made the website  <a href="http://www.jylistys.com" target=_blank>  www.jylistys.com  </a>  for jylistys' children project</div>

		<div id="projectSlider2" class="carousel slide" data-ride="carousel" >
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#projectSlider2" data-slide-to="0" class="active"></li>
		    <li data-target="#projectSlider2" data-slide-to="1"></li>
		    <li data-target="#projectSlider2" data-slide-to="2"></li>
		    <li data-target="#projectSlider2" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<div class="item active"><img src="{{ URL::to('/images/project2-1.png') }}" alt=""></div>
			<div class="item"><img src="{{ URL::to('/images/project2-2.png') }}" alt=""></div>
			<div class="item"><img src="{{ URL::to('/images/project2-3.png') }}" alt=""></div>
			<div class="item"><img src="{{ URL::to('/images/project2-4.png') }}" alt=""></div>
			<div class="item"><img src="{{ URL::to('/images/project2-5.png') }}" alt=""></div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#projectSlider2" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#projectSlider2" role="button" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
		  </div>
		</div> 
	</div><!-- /  -->

	<div class=" project3">
		<div class="mainText">
			<h3 class="display-3">  Hyvinvointivaltion vaalijat ry – HYVA </h3>
			I added custom css and html code to change the entire look and feel of the site. Desined the logo,
			added header slider, rebuit the main navigation menu and so on.
		</div>

		<div id="projectSlider3" class="carousel slide" data-ride="carousel" >
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#projectSlider3" data-slide-to="0" class="active"></li>
		  
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  	<div class="item active"><img src="{{ URL::to('/images/project3-1.png') }}" alt=""></div>

		  </div>
		</div> 
	</div><!-- /  -->


</div>  <!--/container -->
         
@stop