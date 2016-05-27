@extends('layouts.main')

@section('title') Login @stop

@section('content')


	<div class="container alt1">
		<div class="login-panel panel center">
		 	<div class="panel-heading">  
                <h3 class="panel-title">Sign In</h3>  
            </div>
            <div class="panel-body">

			 <form action="{{ URL::route('account-sign-in-post') }}" method="post" role="form" class="center"> 	
				<div class="form-group">
					Email: <input type="text" name="email" class="form-control" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''  }}>
					@if($errors->has('email'))
						<p class="error-disp"> * {{ $errors->first('email') }}</p>
					@endif 
				</div>

				<div class="form-group">
					Password: <input type="password" class="form-control" name="password"> 
					@if($errors->has('password'))
						<p class="error-disp"> *{{ $errors->first('password') }} </p>
					@endif
				</div>

				<div class="form-group"> 
			 		<input type="checkbox" name="remember" id="remember">
			 		<label for="remember"> Remember me </label> 
				</div>
                
                <div  class="sign-in-btns"> 
					<button type="submit"class="btn btn-login"> Sign in </button>
					<a href="{{ URL::route('account-forgot-password-post') }}"> Forgot password?</a>
			 	</div>
			 	{{ Form::token() }}
			 </form>
		 </div>
		</div>	
 	</div>

 
@stop