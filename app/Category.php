<?php

namespace App;

class Category extends Model
{
    protected $fillable = [ 'title' , 'slug', 'body' ];

    public function questions()
    {
    	return $this->hasMany(Question::class);
    }

    public function getRouteKeyName()
    {
		return 'slug';
    }
}
