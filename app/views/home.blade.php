@extends('layouts.main')

@section('title') Home @stop

@section('content')
<div class="container home-container alt1">

	<div class="create-post-btn" > <a href="{{ URL::route('create-blog-post') }}" class="btn home-create-btn btn btn-xl"><span class="glyphicon glyphicon-pencil"></span> Create a Post</a> </div>

    <div class="home-posts-wrapper">
	@if($posts->count())

		@foreach($posts as $post)


		<div class="row no-gutter article-blocks" onclick="window.location.href='{{ URL::action('post-show', $post->id) }}' ">

			    <div class="col-sm-2 home-poster-info"> <!--style="background-color:lavender; -->
					<div class="home-poster-image">
						<img src=" {{ URL::to('/uploads/avatars/' . User::find($post->user_id)->avatar) }}" style="width:50px; height:50px; border-radius:50%;">
					</div>
					<div class="post-published-by"> {{ User::find($post->user_id)->username }} </div>
					<div class="published-on"> {{ $post->created_at->diffForHumans()}} </div>
			    </div>

			    <div class="col-sm-9 home-post-title">
					 <a href="{{ URL::action('post-show', $post->id) }}">{{ $post->title }} </a>
					 @if($comments = Post::find($post->id)->comments)
					 	@if($comments->count() == 0) <p>  no comments yet</p>
						@elseif ($comments->count() == 1) <p> {{ $comments->count() }} comment </p>
						@elseif ($comments->count()  > 1) <p> {{ $comments->count() }} comments </p>
						@else <p>  no comments </p>
						@endif
					 @endif
			    </div>

			    <div class="col-sm-1 home-post-manip" ">  <!-- style="background-color:lavenderblush; -->
				@if(Auth::check())
			        <div class="post-manip">
			            <div data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{ URL::action('post-edit', $post->slug) }}" class="btn  btn-xs btn-warning post-manip-btns"><span class="glyphicon glyphicon-pencil"></span></a></div>
			            <div data-placement="top" data-toggle="tooltip" title="Delete"><a href="{{ URL::action('post-delete', $post->slug) }}" class="btn  btn-xs btn-danger post-manip-btns"><span class="glyphicon glyphicon-trash"></span></a></div>
			        </div>
	        	@endif
			    </div>

         </div>


		@endforeach

	@endif
	</div> <!--/home-posts-wrapper  -->

	<div class="pagin-post">
	{{  $posts->links(); }}
	</div>

</div> <!--/container -->

@stop
