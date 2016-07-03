@extends('layouts.main')

@section('title') Create account @stop

@section('content')	


	<div class="container alt1">
		<div class="signup-panel panel panel-heading-create-account panels">
		 	<div class="panel-heading">  
                <h3 class="panel-title"> Create your account </h3>  
            </div>
            <div class="panel-body"> 
				<form class="form-horizontal" action="{{ URL::route('account-create-post') }}" method="POST" role="form"> 
				{{Form::token()}}
				  	
					
					<div class="form-group">
					 	<label for="username" class="col-md-4 control-label"> Name: </label>
					 	<div class="col-md-6">
						 	<input type="text" name="username" class="form-control" value= {{ (Input::old('username')) ?  e(Input::old('username')) : ''}}>
						 	@if($errors->has('username'))
						 		<p class="error-disp"> *  {{ $errors->first('username') }}</p>
						 	@endif

					 	</div>
					</div>


					<div class="form-group">
						 <label for="email" class="col-md-4 control-label"> E-Mail Address: </label>
						 <div class="col-md-6">
						 	 <input type="text" name="email" class="form-control" value= {{ (Input::old('email')) ? e(Input::old('email')) : '' }}>
						 	@if($errors->has('email'))					 	    
						 			<p class="error-disp"> * {{ $errors->first('email') }}</p>
						 	@endif
					 	</div>
					</div>


					<div class="form-group">
						<label for="password" class="col-md-4 control-label"> Password: </label>
						<div class="col-md-6">
						 	<input type="password" name="password" class="form-control">
						 	@if($errors->has('password'))
						 		<p class="error-disp"> *   {{ $errors->first('password') }}</p>
						 	@endif
					 	</div>
					</div>

					<div class="form-group">
						<label for="password_again" class="col-md-4 control-label"> Confirm Password:  </label>
						<div class="col-md-6">
						 	<input type="password" name="password_again" class="form-control">
						 	@if($errors->has('password_again'))
						 		<p class="error-disp"> *  {{ $errors->first('password_again') }}</p>
						 	@endif
						 </div>
					</div>
 
 					<div class="form-group">
 						<div class="col-md-6 col-md-offset-4"> 
							<button type="submit" class="btn btn-account-create"> 
							 <i class="fa fa-btn fa-user"></i> Register </button>   	
							  	
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>



@stop