@extends('layouts.main')

@section('title') Password Recovery @stop

@section('content')	


	<div class="container alt1" >
		<div class="forgot-password-panel panel panel-primary panels">
		 	<div class="panel-heading">  
                <h3 class="panel-title"> Password Recovery </h3>  
            </div>
            <div class="panel-body">  
				<form action="{{ URL::route('account-forgot-password-post') }}" method="post" role="form">
					<div class="form-group">
						Email: <input type="text" class="form-control" name="email"  {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
						@if($errors->has('email'))
							<p class="error-disp"> *{{ $errors->first('email') }} </p>
						@endif
					</div>
					<button type="submit" class="btn btn-primary">  Recover </button>  
					{{Form::token()}}	
				</form>
			</div>
	  	</div>	
 	</div>

@stop