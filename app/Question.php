<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	// Guarded fields
    protected $guarded = [];
    
    //Questions belong to Quiz
    public function quiz(){
    	return $this->belongsTo(Quiz::class);
    }
}
