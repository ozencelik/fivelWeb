<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function movement(){
		return $this->belongsTo('App\Movement');
	}

    protected $fillable = [
    	'fivel_id', 'user_id', 'exercise'
    ];
}
