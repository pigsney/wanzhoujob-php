<?php


namespace App\Models;


use Tymon\JWTAuth\Contracts\JWTSubject;

class Staff extends User implements JWTSubject
{



    /**
     * @inheritDoc
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @inheritDoc
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}