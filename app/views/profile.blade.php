@extends('layouts.main')

@section('title')  {{ $user->username }} @stop

@section('content')

    <div class="container alt1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <img src=" {{ URL::to('/uploads/avatars/' . $user->avatar ) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right: 25px;">
                <h2>{{  $user->username }} 's  Profile </h2>
                <h3> Details</h3>
                <h5> Email: {{ $user->email }}</h5>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label> Update profile image </label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="" value="upload" class="pull-right btn-sm btn-primary">
                </form>
            </div>
        </div>

    </div>



@stop

