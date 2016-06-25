@extends('layouts.main')

@section('title') Home @stop

@section('content')
	<div class="container home-container alt1">	
		@if(Auth::check())			 
			<div class="create-post" > <a href="{{ URL::route('create-blog-post') }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Create a Post</a> </div>
		@endif
	    
       <!--  <div class="home-posts-wrapper"> posts-wrapper -->

			@if($posts->count())
				@foreach(array_chunk($posts->getCollection()->all(), 3) as $row)

					<div class="posts-row-wrap">  
						<div class="posts-row"> <!-- -->
							@foreach($row as $post)
							<article class="article-blocks" onclick="window.location.href='{{ URL::action('post-show', $post->slug) }}'">
							    @if(Auth::check()) 
			                    <div class="post-manip">
			                        <p data-placement="top" data-toggle="tooltip" title="Delete"><a href="{{ URL::action('post-delete', $post->slug) }}" class="btn  btn-xs post-manip-btns"><span class="glyphicon glyphicon-trash"></span></a></p>
			                        <p data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{ URL::action('post-edit', $post->slug) }}" class="btn  btn-xs post-manip-btns"><span class="glyphicon glyphicon-pencil"></span></a></p>
			                    </div>
				                @endif
								
							    <div class=""> <p class="published-on">Posted {{ $post->created_at->diffForHumans()}}</p> </div>	    	    		 		
							 	<!-- <div class="post-title-header"> <a class="post-title-thumbnail" href="{{ URL::action('post-show', $post->slug) }}">{{ Markdown::parse(Str::limit($post->title, 20)) }} </a> </div> -->
							 	<div class="post-title-header"> <a class="post-title-thumbnail" href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }} </a> </div>			 	
			 	
							 	<div class="post-body">{{ Markdown::parse(Str::limit($post->body, 70)) }}</div>	 
							 	<div> <a class="read-more" href="{{ URL::action('post-show', $post->slug) }}"> more &rarr;</a></div>					 											
							</article>
							@endforeach

						</div>  <!-- /posts row -->
					</div>

				@endforeach
			@endif

		
		<!-- </div>/home-posts-wrapper  -->
		

	<div class="pagin-post">
		{{  $posts->links(); }} 
	</div>

	
	 </div> <!--/container -->

@stop
