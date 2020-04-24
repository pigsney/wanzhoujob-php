<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class LanguageLevel extends BaseEnum
{
    const NOT_TEST= 0;

    const GRADE_ONE_A = 1;
    const GRADE_ONE_B = 2;
    const GRADE_TWO_A = 3;
    const GRADE_TWO_B = 4;
    const GRADE_THREE_A = 5;
    const GRADE_THREE_B = 6;

    const TEM8 = 7;
    const TEM6 = 8;
    const CET6 = 9;
    const CET4 = 10;
    const AET3 = 11;
    const PETS1 = 12;
    const PETS2 = 13;
    const PETS3 = 14;
    const PETS4 = 15;
    const PETS5 = 16;

    const N1 = 17;
    const N2 = 18;
    const N3 = 19;
    const N4 = 20;
    const N5 = 21;

    const A1 =22;
    const A2 = 23;
    const B1 =24;
    const B2 = 25;
    const C1 =26;
    const C2 = 27;

    public static function labMaps()
    {
        return [
            self::NOT_TEST => '未测试/不存在',
            self::GRADE_ONE_A  => "一级甲等",
            self::GRADE_ONE_B => '一级乙等',
            self::GRADE_TWO_A => '二级甲等',
            self::GRADE_TWO_B  => '二级乙等',
            self::GRADE_THREE_A  => "三级甲等",
            self::GRADE_THREE_B => '三级乙等',

            self::TEM8  => "专业英语八级",
            self::TEM6 => '专业英语四级',
            self::CET6 => '大学英语六级',
            self::CET4  => '大学英语四级',
            self::AET3  => "成人英语三级",
            self::PETS1 => '公共英语初始级',
            self::PETS2 => '公共英语中下级',
            self::PETS3  => '公共英语中间级',
            self::PETS4 => '公共英语中上级',
            self::PETS5  => '公共英语最高级',

            self::N1  => "日语n1级",
            self::N2 => '日语n2级',
            self::N3 => '日语n3级',
            self::N4  => '日语n4级',
            self::N5  => "日语n5级",

            self::A1  => "A1",
            self::A2 => 'A2',
            self::B1 => 'B1',
            self::B2  => 'B2',
            self::C1  => "C1",
            self::C2  => "C2",
        ];
    }
}