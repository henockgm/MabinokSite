<?php

class Portfolio extends Eloquent {

    protected $fillable = array('cover', 'created_at', 'updated_at');

    protected $table = 'portfolios';
}
