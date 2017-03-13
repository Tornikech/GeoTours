<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Googlemap extends Model
{
    protected $table ="googlemap";


    public $timestaps = false;

    public function googlemap(){
    	return $this->belongsTo('App\regions');
    }
}
