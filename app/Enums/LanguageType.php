<?php


namespace App\Enums;


use App\Kernels\BaseEnum;
use Illuminate\Support\Collection;

class LanguageType extends BaseEnum
{
    const MANDARIN = 1;
    const CANTONESE = 2;
    const ENGLISH = 3;
    const JAPANESE = 4;
    const FRENCH = 5;
    const GERMAN = 6;
    const ARABIC = 7;
    const RUSSIAN = 8;
    const SPANISH = 9;
    const KOREAN = 10;
    const ITALIAN = 11;
    const HANGUL = 12;
    const PORTUGUESE = 13;
    const OTHER_LANGUAGE = 14;

    public static function labMaps()
    {
        return [
            self::MANDARIN  => "普通话",
            self::CANTONESE => '粤语',
            self::ENGLISH => '英语',
            self::JAPANESE  => '日语',
            self::FRENCH  => "法语",
            self::GERMAN => '德语',
            self::ARABIC => '阿拉伯语',
            self::RUSSIAN  => '俄语',
            self::SPANISH  => "西班牙语",
            self::KOREAN => '朝鲜语',
            self::ITALIAN => '意大利语',
            self::HANGUL  => '韩语',
            self::PORTUGUESE  => "葡萄牙语",
            self::OTHER_LANGUAGE => '其他语种'
        ];
    }

    public static function extendMaps($key) : Collection
    {
        return collect(self::$extend_maps)->search($key);
    }

    public static $extend_maps = [
        self::MANDARIN => [
            LanguageLevel::GRADE_ONE_A,
            LanguageLevel::GRADE_ONE_B,
            LanguageLevel::GRADE_TWO_A,
            LanguageLevel::GRADE_TWO_B,
            LanguageLevel::GRADE_THREE_A,
            LanguageLevel::GRADE_THREE_B,
        ],
        self::CANTONESE => [],
        self::ENGLISH => [
            LanguageLevel::TEM8,
            LanguageLevel::TEM6,
            LanguageLevel::CET6,
            LanguageLevel::CET4,
            LanguageLevel::AET3,
            LanguageLevel::PETS1,
            LanguageLevel::PETS2,
            LanguageLevel::PETS3,
            LanguageLevel::PETS4,
            LanguageLevel::PETS5,
        ],
        self::JAPANESE => [
            LanguageLevel::N1,
            LanguageLevel::N2,
            LanguageLevel::N3,
            LanguageLevel::N4,
            LanguageLevel::N5,
        ],
        self::FRENCH => [],
        self::GERMAN => [],
        self::ARABIC => [],
        self::RUSSIAN  => [],
        self::SPANISH  => [],
        self::KOREAN => [],
        self::ITALIAN => [],
        self::HANGUL  => [],
        self::PORTUGUESE  => [],
        self::OTHER_LANGUAGE => [],
    ];

}