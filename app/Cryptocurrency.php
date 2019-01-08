<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cryptocurrency extends Model
{
    //
    
    public function addresses(){
        return $this->hasMany('App\Model\Address');
    }
}
