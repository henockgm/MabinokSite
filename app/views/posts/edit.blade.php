@extends('layout.main')

@section('title') Edit Post @stop

@section('content')

       <div class="container alt1">
			<form action=" {{ URL::action('post-edit-post', $post->id) }}" method="post" class="form-edit-post">
		
			 <div class="form-group">
			 	<label for="edit_post_title"> Title: </label>
			 	<input type="text" name="edit_post_title" class="form-control" value="{{ $post->title }}">
			 	@if($errors->has('edit_post_title'))
			 		<p class="error-disp"> * {{ $errors->first('edit_post_title') }}</p>
			 	@endif
			 </div>

			  <div class="form-group">
			 	<label for="edit_post_body"> Body: </label>
			 	<textarea name="edit_post_body" cols="50" rows="12" class="form-control" >{{ $post->body }}</textarea>
			 	@if($errors->has('edit_post_body'))
			 		<p class="error-disp"> * {{ $errors->first('edit_post_body') }}</p>
			 	@endif
			 </div>
			  
			 <button type="submit" class="btn btn-primary" class="form-control">Update post</button>
			{{  Form::Token() }}
			
			</form>
</div>

@stop