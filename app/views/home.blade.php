@extends('layout.main')

@section('title') Home @stop

@section('content')
	<div class="container page-middle alt1">	
		@if(Auth::check())			 
			<div class="create-post" > <a href="{{ URL::route('create-blog-post') }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Create a Post</a> </div>
		@endif
	    
         <div class="alt1 container page-middle-content"> 

			@if($posts->count())
				@foreach(array_chunk($posts->getCollection()->all(), 2) as $row)
				<!-- <div class="row">  -->
				 
					@foreach($row as $post)
					<article class="article-wrapper t-article article-blocks" onclick="window.location.href='{{ URL::action('post-show', $post->slug) }}'">
					    @if(Auth::check()) 
	                    <div class="post-manip article-blocks">
	                        <p data-placement="top" data-toggle="tooltip" title="Delete"><a href="{{ URL::action('post-delete', $post->slug) }}" class="btn  btn-xs post-manip-btns"><span class="glyphicon glyphicon-trash"></span></a></p>
	                        <p data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{ URL::action('post-edit', $post->slug) }}" class="btn  btn-xs post-manip-btns"><span class="glyphicon glyphicon-pencil"></span></a></p>
	                    </div>
		                @endif
						
					    <div class="article-blocks"> <p class="published-on">Posted {{ $post->created_at->diffForHumans()}}</p> </div>	    	    		 		
					 	<div class="post-title-header"> <a class="post-title" href="{{ URL::action('post-show', $post->slug) }}">{{ Markdown::parse(Str::limit($post->title, 20)) }} </a> </div>			 	
					 	<div class="post-body">{{ Markdown::parse(Str::limit($post->body, 70)) }}</div>	 
					 	<div>
					 		<a class="read-more" href="{{ URL::action('post-show', $post->slug) }}"> more &rarr;</a>
					 	</div>			
								
					</article>
					@endforeach
					
				<!--</div>   end of row -->

				@endforeach
			@endif

		
	</div>  <!--  make center -->
		

	<div class="pagin-post">
		{{  $posts->links(); }} 
	</div>

	
	</div>

@stop
