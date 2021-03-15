<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finition extends Model
{

	public function matériaus()
    {
        return $this->belongsTo('App\Matériau','matériaus_id');
    }

	    public function coloris()
    {
        return $this->belongsTo('App\Coloris','coloris_id');
    }

}
