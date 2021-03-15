<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coloris extends Model
{
    public function matériau()
    {
        return $this->belongsTo('App\Matériau','matériaus_id');
    }

        public function finitions(){
    
            return $this->hasMany('App\Finition');
    
    }
}
