<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class MaritalStatus extends BaseEnum
{
    const SINGLE = 1;
    const MARRIED = 2;
    const DIVORCE = 3;
    const SECRECY = 4;

    public static function labMaps(){
        return [
            self::SINGLE => '未婚',
            self::MARRIED => '已婚',
            self::DIVORCE => '离婚',
            self::SECRECY => '保密'
        ];
    }
}