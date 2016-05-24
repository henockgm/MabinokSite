<?php 


class Post extends Eloquent {


protected $fillable = array('title', 'slug', 'draft', 'body');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';


}