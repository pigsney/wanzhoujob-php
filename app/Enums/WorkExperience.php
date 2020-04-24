<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class WorkExperience extends BaseEnum
{
    const ALL = 1;
    const CURRENT_STUDENT= 2;
    const GRADUATE = 3;
    const YEAR_1_TO_INFINITE = 4;
    const YEAR_2_TO_INFINITE = 5;
    const YEAR_3_TO_INFINITE = 6;
    const YEAR_4_TO_INFINITE = 7;
    const YEAR_5_TO_INFINITE = 8;
    const YEAR_6_TO_INFINITE = 9;
    const YEAR_7_TO_INFINITE = 10;
    const YEAR_8_TO_INFINITE = 11;
    const YEAR_9_TO_INFINITE = 12;
    const YEAR_10_TO_INFINITE = 13;


    public static function labMaps(){
        return [
            self::ALL                => '不限',
            self::GRADUATE           => '应届毕业生',
            self::CURRENT_STUDENT        => '在线学生',
            self::YEAR_1_TO_INFINITE        => '1年以上',
            self::YEAR_2_TO_INFINITE        => '2年以上',
            self::YEAR_3_TO_INFINITE        => '3年以上',
            self::YEAR_4_TO_INFINITE => '4年以上',
            self::YEAR_5_TO_INFINITE => '5年以上',
            self::YEAR_6_TO_INFINITE => '6年以上',
            self::YEAR_7_TO_INFINITE => '7年以上',
            self::YEAR_8_TO_INFINITE => '8年以上',
            self::YEAR_9_TO_INFINITE => '9年以上',
            self::YEAR_10_TO_INFINITE => '10年以上'
        ];
    }
}