@extends('layouts.main')

@section('title') Update Cover @stop

@section('content')

 <div class="container alt1">
    <div class="panel panel-cover-post">
        <div class="panel-heading panel-create-post-heading">
            <h3 class="panel-title"> Update Cover letter </h3>
        </div>
        <div class="panel-body">
            <form action=" {{ URL::route('update-cover') }}" method="post" class="edit-cover-form">

             <div class="form-group">
                <label for="cover_greeting"> Greetings : </label>
                <input type="text" name="cover_greeting" class="form-control post-title-input" value="Greeting">
             </div>

              <div class="form-group">
                <label for="cover_body"> Body: </label>
                <textarea name="cover_body" class="form-control post-body-input" >{{ $cover->cover }}</textarea>
                @if($errors->has('cover_body'))
                    <p class="error-disp"> * {{ $errors->first('cover_body') }}</p>
                @endif
             </div>

             <button type="submit" class="btn btn-danger" class="form-control">Update cover</button>
            {{  Form::Token() }}

            </form>

        </div>
    </div>

</div>

@stop
