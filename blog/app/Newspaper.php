<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Newspaper;
use App\Magazine;

class Newspaper extends Model
{
    Protected $fillable = ['article','region','website'];
	
	 public function magazines()
	 {
		return $this->belongsToMany('App\Magazine')->withTimestamps();
	 }
}
