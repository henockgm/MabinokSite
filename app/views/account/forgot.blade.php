@extends('layouts.main')

@section('title') Password Recovery @stop

@section('content')	


	<div class="container alt1" >

		

		    
				<div class="forgot-password-panel panel panel-default">
				 	<div class="panel-heading">  
		                <h3 class="panel-title">  Reset Password </h3>  
		            </div>
		            <div class="panel-body">  
						<form class="form-horizontal" action="{{ URL::route('account-forgot-password-post') }}" method="post" role="form">

						{{Form::token()}}
							<div class="form-group">
								<label for="email" class="col-md-4 control-label"> E-Mail Address </label>

								<div class="col-md-6">
									<input type="text" class="form-control" name="email"  {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
									@if($errors->has('email'))
										<p class="error-disp"> *{{ $errors->first('email') }} </p>
									@endif
								</div>

							</div>

							<div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
		                                </button>
		                            </div>
		                        </div>
								
						</form>
					</div>
			  	</div>
		
	  
 	</div>

@stop