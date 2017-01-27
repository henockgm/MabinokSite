@extends('layouts.main')
@section ('title') CV @stop
@section('content')
 
    <div class="cv-holder">
		<iframe class="pdf-holder" src="{{ asset('files/CVHenockMullissa.pdf') }}" scrolling=no> </iframe>
    </div>
      <!--  -->
@stop