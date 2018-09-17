<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\PasswordReset;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
    public function sessions(){
        return $this->hasMany('App\User');
    }
    // public function sendPasswordResetNotification($token)
    //     {
    // $this->notify(new PasswordReset($token));
    //     }
}
