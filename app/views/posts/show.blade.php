@extends('layouts.main')

@section('title') {{ $post->title }} @stop

@section('content')


	 <div class="container alt1">

			<a class="back-btn" href="{{ URL::previous() }}"> <i class="fa fa-xlg fa-arrow-circle-left" aria-hidden="true" style="font-size: 44px;"></i> </a>


		 <article class="main-post-body-wrapper">

            @if(Auth::check())
            <div class="show-post-manip">
                <div data-placement="top" data-toggle="tooltip" title="Delete"><a href="{{ URL::action('post-delete', $post->slug) }}" class="btn  btn-xs btn-danger post-manip-btns"><span class="glyphicon glyphicon-trash"></span></a></div>
                <div data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{ URL::action('post-edit', $post->slug) }}" class="btn  btn-xs btn-warning post-manip-btns"><span class="glyphicon glyphicon-pencil"></span></a></div>
            </div>
            @endif

		 	<h2> <a class="post-title post-title-main" href="{{ URL::action('post-show', $post->id) }}">{{ $post->title }}</a> </h2>
		 		<div class="show-post-body"> {{ Markdown::parse($post->body) }}  </div>
		</article>


		@if($comments = Post::find($post->id)->comments)

          <div class="comments-wrapper">
          <p class="comments-count"> {{ $comments->count() }} Comment(s) Found: </p>
            @foreach ($comments as $comment)
                <section class="comment-block">
	                <div class="post-comment-author">
                        <div class="author-image">
                        	<img src="{{ URL::to('/uploads/avatars/' . User::find($comment->user_id)->avatar)  }}">
                        </div>

                        <div class="comment-posted-by">Posted by {{ User::find($comment->user_id)->username }} </div>
                        <div class="comment-posted-on"> {{ $comment->created_at->diffForHumans() }} </div>
	                </div>
	                <div class="post-comment-body">
	                     {{ Markdown::parse($comment->message) }}
	                </div>
                </section>

            @endforeach

            </div>
         @endif



        <div class="comment-input">
	        <form action=" {{ URL::route('post-comment', $post->id) }}" method="post">
	            <div class="form-group">
	                <label for="blog_post_comment"> post Your comment: </label>
	                <textarea name="blog_post_comment" class="form-control" >{{ Input::old('blog_post_comment') ? e(Input::old('blog_post_comment')) : '' }}</textarea>
	                @if($errors->has('blog_post_comment'))
	                    <p class="error-disp"> * {{ $errors->first('blog_post_comment') }}</p>
	                @endif
	             </div>

	             <button type="submit" class="btn btn-primary" class="form-control">Submit your comment</button>
	            {{  Form::Token() }}

	        </form>
        </div>


	</div>
@stop
