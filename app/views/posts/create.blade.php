@extends('layouts.main')

@section('title') Create Post @stop

@section('content')


 
 <div class="container alt1">
   	<div class="panel center panel-create-post">
   		<div class="panel-heading panel-create-post-heading"> 
   			<h3 class="panel-title"> Got something intersting? Post it! </h3>
   		</div>
   		<div class="panel-body">
			<form action=" {{ URL::route('post-create-blog-post') }}" method="post" class="form-create-post">
		
			 <div class="form-group">
			 	<label for="blog_post_title"> Title: </label>
			 	<input type="text" name="blog_post_title" class="form-control" value={{ Input::old('blog_post_title') ? e(Input::old('blog_post_title')) : '' }}>
			 	@if($errors->has('blog_post_title'))
			 		<p class="error-disp"> * {{ $errors->first('blog_post_title') }}</p>
			 	@endif
			 </div>

			  <div class="form-group">
			 	<label for="blog_post_body"> Body: </label>
			 	<textarea name="blog_post_body" cols="50" rows="12" class="form-control" >{{ Input::old('blog_post_body') ? e(Input::old('blog_post_body')) : '' }}</textarea>
			 	@if($errors->has('blog_post_body'))
			 		<p class="error-disp"> * {{ $errors->first('blog_post_body') }}</p>
			 	@endif
			 </div>
			  
			 <button type="submit" class="btn btn-primary" class="form-control">Create your post</button>
			{{  Form::Token() }}
			
			</form>

   		</div>
   	</div>	
		
</div>

@stop