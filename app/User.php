<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{

    use Notifiable;

    protected $hidden =
      [
        'password',
        'remember_token',
        'email_verified_at'
      ];

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = ['username','password','email'];



    public function getType(){

        return $this->hasMany(\App\Model\UserBind::class,'user_id','id');
    }


    public function blog(){
        return $this->hasMany(Blog::class,'user_id');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to
     * the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
