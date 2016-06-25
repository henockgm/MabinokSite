@extends('layouts.main')
@section ('title') References @stop
@section('content')


     
    
      
    <div class="cv-holder">
        <h4 class="file-title"> Robert Äström and Johan Johansson - Raisoft Oy Ltd.  </h4>
	   <iframe class="pdf-holder" src="{{ asset('files/References.pdf') }}"> </iframe>
    </div>
     
    <div class="cv-holder">
         <h4 class="file-title"> Juha Nurmela - Finland Statistics Research Head  </h4>
	   <iframe class="pdf-holder" src="{{ asset('files/ref_juhanurmela.pdf') }}"> </iframe>
    </div>

@stop