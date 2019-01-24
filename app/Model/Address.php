<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected  $guarded=[];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function cryptocurrency(){
        return $this->belongsTo('App\Cryptocurrency');
    }
}
