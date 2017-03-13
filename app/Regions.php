<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table ="regioninfo";


	public function googlemap() {

		return $this->hasMany('App\googlemap');
	}
	

    public $timestaps = false;
}
