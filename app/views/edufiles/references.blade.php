@extends('layouts.main')
@section ('title') References @stop
@section('content')


     
    <div class="container project-container">
      
    <div class="ref-holder">
        <h4 class="display-3" style="margin:0;"> Johan Johansson  </h4>
	   <iframe class="pdf-holder" src="{{ asset('files/References.pdf') }}"> </iframe>
    </div>
     


    <div class="ref-holder">
         <h4 class="display-3" style="margin:0;"> Juha Nurmela  </h4>
	   <iframe class="pdf-holder" src="{{ asset('files/ref_juhanurmela.pdf') }}"> </iframe>
    </div>
 </div>
@stop