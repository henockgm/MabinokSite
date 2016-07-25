<?php

class Comment extends Eloquent {


    protected $fillable = array('post_id', 'user_id', 'message','owner');

    protected $table = 'comments';

    protected $touches = array('post');


    public function post()
    {
        return $this->belongsTo('Post');
    }


}
