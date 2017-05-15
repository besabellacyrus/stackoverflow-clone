<?php

namespace App;

class Comment extends Model
{
	/**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['questions', 'answers'];

    public function answer()
    {
    	return $this->belongsTo(Answer::class);
    }

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
}
