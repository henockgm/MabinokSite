@extends('layouts.main')
@section ('title') CV @stop
@section('content')
 

    <div class="cv-holder" style="margin: 0 auto; width:90%; margin-right:50px;">
	<iframe class="pdf-holder" src="{{ asset('files/CV_HenockMullissa.pdf') }}" width="1000px" height="1200px;"> </iframe>
    </div>
@stop