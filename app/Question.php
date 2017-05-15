<?php

namespace App;

class Question extends Model
{
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }
}
