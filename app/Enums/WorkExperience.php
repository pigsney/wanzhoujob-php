<?php


namespace App\Enums;


class WorkExperience extends BaseEnum
{
    const ALL = 1;
    const GRADUATE = 2;
    const YEAR_0_TO_1 = 3;
    const YEAR_1_TO_2 = 4;
    const YEAR_2_TO_3 = 5;
    const YEAR_3_TO_5 = 6;
    const YEAR_3_TO_INFINITE = 7;
    const YEAR_5_TO_INFINITE = 8;


    public static function labMaps(){
        return [
            self::ALL                => '不限',
            self::GRADUATE           => '应届毕业生皆可',
            self::YEAR_0_TO_1        => '1年以下',
            self::YEAR_1_TO_2        => '1-2年',
            self::YEAR_2_TO_3        => '2-3年',
            self::YEAR_3_TO_5        => '3-5年',
            self::YEAR_3_TO_INFINITE => '3年以上',
            self::YEAR_5_TO_INFINITE => '5年以上'
        ];
    }
}