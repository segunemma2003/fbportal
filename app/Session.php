<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded=['id'];


    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function report(){
        return $this->hasOne('App\Reports');
    }
}
