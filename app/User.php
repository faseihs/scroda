<?php

namespace App;




use DebugBar\DebugBar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'email', 'password','role_id','subscribed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public $incrementing = false;



    public function addressRequest(){
        return $this->hasOne('App\Model\Address')->where('status',0);
    }

    public function address(){
        return $this->hasOne('App\Model\Address')->where('status',1);
    }


    public function findAddress($id,$str){
        $cc= Cryptocurrency::where('short',$str)->first();

        if(!$cc)
            return false;

        $address=$cc->addresses()->where('user_id',$id)->first();
        \Debugbar::info($address);
        return $address;
    }
}
