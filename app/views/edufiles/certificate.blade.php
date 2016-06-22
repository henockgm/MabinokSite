@extends('layouts.main')
@section ('title') Certificate @stop
@section('content')
 
<div class="container"> 
    <div class="cv-holder" style="margin: 0 auto; width:90%; margin-right:50px;">
		<iframe class="pdf-holder" src="{{ asset('files/certificate.pdf') }}" width="960px" height="1200px;"> </iframe>
    </div>
</div>
@stop