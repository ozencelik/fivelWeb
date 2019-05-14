<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function user(){
		return $this->belongsTo('App\User');
	}

    protected $fillable = [
    	'user_id', 'user_name', 'cart'
    ];
}
