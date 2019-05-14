<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $fillable = [
    	'imagePath', 'title', 'description'
    ];

    public function exercise(){
        return $this->hasMany('App\Exercise');
    }
}
