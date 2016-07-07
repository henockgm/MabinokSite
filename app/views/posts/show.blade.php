@extends('layouts.main')

@section('title') {{ $post->title }} @stop

@section('content')


	 <div class="container alt1">

			<a href="{{ URL::previous() }}"> <i class="fa fa-xlg fa-arrow-circle-left" aria-hidden="true" style="font-size: 44px;"></i> </a>
			@if(Auth::check()) 
	            <div class="post-manip">
	                <p data-placement="top" data-toggle="tooltip" title="Delete"><a href="{{ URL::action('post-delete', $post->slug) }}" class="btn  btn-xs post-manip-btns"><span class="glyphicon glyphicon-trash"></span></a></p>
	                
	                <p data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{ URL::action('post-edit', $post->slug) }}" class="btn  btn-xs post-manip-btns"><span class="glyphicon glyphicon-pencil"></span></a></p>
	            </div>
	            @endif
		 <article class="make-center main-post-body-wrapper">

		 	<h2> <a class="post-title post-title-main" href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a> </h2> 
		 		<div class="post-body-main"> {{ Markdown::parse($post->body) }}  </div> 		
		</article>
	</div>
@stop