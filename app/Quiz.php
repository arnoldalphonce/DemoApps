<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    // Guarded fields
    protected $guarded = [];
    // add a relationship to questions table
    public function questions(){
    	return $this->hasMany(Question::class);
    }
}
