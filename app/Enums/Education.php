<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class Education extends BaseEnum
{
    const ALL = 1;
    const JUNIOR_HIGH_SCHOOL_AND_BELOW = 2;
    const JUNIOR_MIDDLE_SCHOOL = 3;
    const HIGH_SCHOOL = 4;
    const JUNIOR_COLLEGE = 5;
    const UNDERGRADUATE = 6;
    const MASTER = 7;
    const DOCTOR = 8;
    const GRADUATE_STUDENT = 9;
    const POLYTECHNIC_SCHOOL = 10;



    public static function labMaps()
    {
        return [
            self::ALL                          => "不限",
            self::JUNIOR_HIGH_SCHOOL_AND_BELOW => '初中及以下',
            self::JUNIOR_MIDDLE_SCHOOL         => '初中',
            self::HIGH_SCHOOL                  => '高中',
            self::JUNIOR_COLLEGE               => "大专",
            self::UNDERGRADUATE                => '本科',
            self::MASTER                       => '硕士',
            self::DOCTOR                       => '博士',
            self::GRADUATE_STUDENT             => '研究生',
            self::POLYTECHNIC_SCHOOL           => '中专',
        ];
    }
}