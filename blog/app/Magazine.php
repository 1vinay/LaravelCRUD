<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Newspaper;
use App\Magazine;

class Magazine extends Model
{
    Protected $fillable = ['magazine','region','website'];
	
	public function newspapers()
	{
		return $this->belongsToMany('App\Newspaper')->withTimestamps();
	} 
}
