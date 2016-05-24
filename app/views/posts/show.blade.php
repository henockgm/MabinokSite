@extends('layout.main')

@section('title') {{ $post->title }} @stop

@section('content')
	 <div class="container alt1">
		 <article class="make-center main-post-body-wrapper">
		 	<h2> <a class="post-title" href="{{ URL::action('post-show', $post->slug) }}">{{ $post->title }}</a> </h2> 
		 		<div class="post-body-main"> {{ Markdown::parse($post->body) }}  </div> 		
		</article>
	</div>
@stop