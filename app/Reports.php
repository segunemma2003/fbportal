<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $guarded=['id'];



    public function session(){
        return $this->belongsTo('App\Session','session_id');
    }
}
