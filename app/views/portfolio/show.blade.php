@extends('layouts.main')

@section('title') Cover letter @stop

@section('content')


    <div class="container cover-letter">

        <div class="cover-tools d-block">

        <a class="inline back-btn" href="{{ URL::previous() }}"> <i class="fa fa-xlg fa-arrow-circle-left" aria-hidden="true" ></i> </a>

        @if(Auth::user()->isAdmin())
            <a href="{{ URL::route('edit-cover') }}" class="d-inline btn btn btn-warning pull-right"><span class="glyphicon glyphicon-pencil"></span> Edit </a>
            <a href="{{ URL::route('create-cover') }}" class="d-inline btn btn btn-primary pull-right"><span class="glyphicon glyphicon-open-file"></span> New </a>
        @endif

        </div>

        <div class="cover-body"> {{ $cover->cover }}  </div>

    </div>

@stop
