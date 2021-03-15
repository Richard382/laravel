<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matériau extends Model
{
    public function colorises(){
	
			return $this->hasMany('App\Coloris');
	
	}

	public function finitions(){
	
			return $this->hasMany('App\Finition');
	
	}

}
