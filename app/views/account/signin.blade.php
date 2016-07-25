@extends('layouts.main')

@section('title') Login @stop

@section('content')


	<div class="container alt1">
		<div class="login-panel panel panels">
		 	<div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">

			 <form class="form-horizontal" action="{{ URL::route('account-sign-in-post') }}" method="post" role="form">
			 	{{ Form::token() }}

				<div class="form-group" >
				 	<label for="email" class="col-md-4 control-label">E-Mail Address</label>

				 	<div class="col-md-6">
						<input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''  }}>
						@if($errors->has('email'))
							<p class="error-disp"> * {{ $errors->first('email') }}</p>
						@endif
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-md-4 control-label">Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
						@if($errors->has('password'))
							<p class="error-disp"> *{{ $errors->first('password') }} </p>
						@endif
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<div class="checkbox">
				 			<label>
								<input type="checkbox" name="remember" id="remember">
								Remember me
				 			</label>
				 		</div>
			 		</div>
				</div>

                <div class="form-group">
	                <div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-login">
	                    	<i class="fa fa-btn fa-sign-in"> </i> Login
						</button>

						<a href="{{ URL::route('account-forgot-password-post') }}"> Forgot password?</a>
				 	</div>
			 	</div>

			 </form>
		 </div>
		</div>
 	</div>


@stop
