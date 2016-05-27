@extends('layouts.main')

@section('title')  {{ $user->username }} @stop

@section('content')

    <div class="container alt1">
		<p>  {{  $user->username }} ({{ $user->email }})</p>
		<p>  </p>
    </div>

@stop


