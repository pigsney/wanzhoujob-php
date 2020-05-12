<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{

    use Notifiable;

    protected $table = 'staff';

    protected $fillable = [
        'id_number','email','password'
    ];

    protected $hidden =['password','remember_token'];


}