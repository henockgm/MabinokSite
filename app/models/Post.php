<?php


class Post extends Eloquent {


    protected $fillable = array('user_id', 'title', 'slug', 'draft', 'body', 'owner');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

    public function comments()
    {
        return $this->hasMany('Comment')->orderBy('created_at', 'desc');
    }

}
