@extends('layouts.main')

@section('title') {{ $post->title }} @stop

@section('content')
	 <div class="container alt1">
       

        <p data-placement="top" data-toggle="tooltip" title="Delete"><a class="btn btn-danger delete-post-btn" data-type="Delete" data-toggle="modal" data-target="#delete" >Delete this post</a></p>

	 	<form action="{{ URL::action('post-delete-post', $post->id)}}" method="post">
	 		{{  Form::Token() }}
             
			<!-- ++++++++++++++++++++++++++++++++++++++++++ DELETE CONFIRM MODAL ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
		    
		    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">

		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
		                </div>

		                <div class="modal-body">
		                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
		                </div>

		                <div class="modal-footer ">
		                    <button type="submit" class="btn btn-success" data-type="yes-confirm-delete" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
		                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
		                </div>
		            </div>
		        <!-- /.modal-content --> 
		        </div>
		    <!-- /.modal-dialog --> 
		    </div>

		</form> 

		<article class="make-center">
		 	<h2> <a class="post-title" href="{{ URL::action('post-delete', $post->slug) }}">{{ $post->title }}</a> </h2> 
		 		 {{ Markdown::parse($post->body) }} 		
		</article>
	</div>
 <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
@stop