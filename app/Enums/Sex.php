<?php


namespace App\Enums;


class Sex extends BaseEnum
{
    const ALL = 1;
    const MAN = 2;
    const WOMEN = 3;

    public static function labMaps(){
        return [
            self::MAN => '男',
            self::WOMEN => '女',
            self::ALL => '不限'
        ];
    }
}