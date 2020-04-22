<?php


namespace App\Enums;


class Whether extends BaseEnum
{
    const YES = 1;
    const NO = 0;

    public static function labMaps(){
        return [
            self::YES                => '是',
            self::NO           => '否',
        ];
    }
}