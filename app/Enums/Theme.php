<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class Theme extends BaseEnum
{
    const HOBBY= 1;
    const RELIGIOUS_BELIEF = 2;
    const CAREER_GOALS = 3;
    const AWARDS_HONORS = 4;
    const PERSONALITY_SPECIALTY =5;
    const CUSTOMIZE = 6;

    public static function labMaps(){
        return [
            self::HOBBY                => '兴趣爱好',
            self::RELIGIOUS_BELIEF           => '宗教信仰',
            self::CAREER_GOALS           => '职业目标',
            self::AWARDS_HONORS           => '获奖荣誉',
            self::PERSONALITY_SPECIALTY           => '个性特长',
            self::CUSTOMIZE           => '自定义',
        ];
    }



}