@extends('layouts.main')

@section('title') Create Cover @stop

@section('content')

 <div class="container alt1">
    <div class="panel panel-create-post">
        <div class="panel-heading panel-create-post-heading">
            <h3 class="panel-title"> Create a new Cover letter </h3>
        </div>
        <div class="panel-body">
            <form action=" {{ URL::route('create-cover') }}" method="post" class="form-create-post">

             <div class="form-group">
                <label for="cover_greeting"> Greetings : </label>
                <input type="text" name="cover_greeting" class="form-control post-title-input" value={{ Input::old('cover_greeting') ? e(Input::old('cover_greeting')) : '' }}>
                @if($errors->has('cover_greeting'))
                    <p class="error-disp"> * {{ $errors->first('cover_greeting') }}</p>
                @endif
             </div>

              <div class="form-group">
                <label for="cover_body"> Body: </label>
                <textarea name="cover_body" class="form-control post-body-input" >{{ Input::old('cover_body') ? e(Input::old('cover_body')) : '' }}</textarea>
                @if($errors->has('cover_body'))
                    <p class="error-disp"> * {{ $errors->first('cover_body') }}</p>
                @endif
             </div>

             <button type="submit" class="btn btn-primary" class="form-control">Create new cover</button>
            {{  Form::Token() }}

            </form>

        </div>
    </div>

</div>

@stop
