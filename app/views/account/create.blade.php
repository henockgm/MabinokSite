@extends('layout.main')

@section('title') Create account @stop

@section('content')	


	<div class="container alt1">
		<div class="signup-panel panel center panel-heading-create-account">
		 	<div class="panel-heading">  
                <h3 class="panel-title"> Create your account </h3>  
            </div>
            <div class="panel-body"> 
				<form action="{{ URL::route('account-create-post') }}" method="post" role="form" class="center"> 
				  	
					<div class="form-group">
						 <label for="email"> Email: </label>
					 	 <input type="text" name="email" class="form-control" value= {{ (Input::old('email')) ? e(Input::old('email')) : '' }}>
					 	@if($errors->has('email'))
					 		<p class="error-disp"> * {{ $errors->first('email') }}</p>
					 	@endif
					</div>

					<div class="form-group">
					 	<label for="username"> Username: </label>
					 	<input type="text" name="username" class="form-control" value= {{ (Input::old('username')) ?  e(Input::old('username')) : ''}}>
					 	@if($errors->has('username'))
					 		<p class="error-disp"> *  {{ $errors->first('username') }}</p>
					 	@endif
					</div>

					<div class="form-group">
						<label for="password"> Password: </label>
					 	<input type="password" name="password" class="form-control">
					 	@if($errors->has('password'))
					 		<p class="error-disp"> *   {{ $errors->first('password') }}</p>
					 	@endif
					</div>

					<div class="form-group">
						<label for="password_again"> Repeat password:  </label>
					 	<input type="password" name="password_again" class="form-control">
					 	@if($errors->has('password_again'))
					 		<p class="error-disp"> *  {{ $errors->first('password_again') }}</p>
					 	@endif
					</div>

					<button type="submit" class="btn btn-account-create center"> Sign up </button>   	
					  	{{Form::token()}}
				</form>
			</div>
		</div>
	</div>



@stop