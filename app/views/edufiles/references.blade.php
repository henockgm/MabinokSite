@extends('layouts.main')
@section ('title') References @stop
@section('content')



    <div class="jumbotron">
      <h2 class="display-3"> Johan Johansson  </h2>
    </div>
    
    <div class="ref-holder" style="margin: 0 auto; width:90%; margin-right:50px;">
	<iframe class="pdf-holder" src="{{ asset('files/References.pdf') }}" width="1000px" height="1200px;"> </iframe>
    </div>
     
      

    <div class="jumbotron">
      <h2 class="display-3"> Juha Nurmela  </h2>
    </div>

    <div class="ref-holder" style="margin: 0 auto; width:90%; margin-right:50px;">
	<iframe class="pdf-holder" src="{{ asset('files/ref_juhanurmela.pdf') }}" width="1000px" height="800px;"> </iframe>
    </div>

@stop