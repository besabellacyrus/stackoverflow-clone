<?php

namespace App;

class Answer extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
