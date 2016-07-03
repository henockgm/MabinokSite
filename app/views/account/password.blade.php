@extends('layouts.main')

@section('title') Password change @stop

@section('content')



	<div class="container alt1 anim" >
		<div class="change-password-panel panel panel-primary panels">
		 	<div class="panel-heading">  
                <h3 class="panel-title"> Change Your Password </h3>  
            </div>
            <div class="panel-body">  
				<form action="{{ URL::route('account-change-password-post')  }}" method="post" role="form">
					<div class="form-group">		
						Old password: <input type="password" name="old_password" class="form-control">
						@if($errors->has('old_password'))
							<p class="error-disp"> * {{ $errors->first('old_password') }}</p>
						@endif
					</div>
					<div class="form-group">		
						New password: <input type="password" name="password" class="form-control">
						@if($errors->has('password'))
							<p class="error-disp"> * {{ $errors->first('password') }}</p>
						@endif
					</div>

					<div class="form-group">		
						New password again: <input type="password" name="password_again" class="form-control">
						@if($errors->has('password_again'))
							<p class="error-disp"> * {{ $errors->first('password_again') }} </p>
						@endif
					</div>

					<input type="submit" value="Change password" class="btn btn-warning" >
					{{  Form::token()}}
				</form>
			</div>
	  	</div>	
 	</div>



@stop