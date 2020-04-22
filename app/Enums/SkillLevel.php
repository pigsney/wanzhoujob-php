<?php


namespace App\Enums;


class SkillLevel extends BaseEnum
{
    const BEGINNER= 1;
    const PRACTISED = 2;
    const MASTER = 3;

    public static function labMaps(){
        return [
            self::BEGINNER                => '入门',
            self::PRACTISED           => '熟练',
            self::MASTER           => '精通',
        ];
    }
}