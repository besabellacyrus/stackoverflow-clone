<?php

namespace App;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

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

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
