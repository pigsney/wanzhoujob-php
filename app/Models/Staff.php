<?php


namespace App\Models;


use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Staff extends Authenticate implements JWTSubject
{

    use Notifiable;

    protected $fillable = [
        'id_number','email','password'
    ];

    protected $hidden =['password','remember_token'];


    public function getJWTIdentifier()
    {
        return $this->geKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}