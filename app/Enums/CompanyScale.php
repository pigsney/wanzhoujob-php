<?php


namespace App\Enums;


class CompanyScale extends BaseEnum
{
    const PEOPLE_0_TO_50 = 1;
    const PEOPLE_50_TO_200 = 2;
    const PEOPLE_200_TO_500 = 3;
    const PEOPLE_500_TO_1000 = 4;
    const PEOPLE_1000_TO_INFINITE = 5;


    public static function labMaps(){
        return [
           self::PEOPLE_0_TO_50          => '少于50人',
           self::PEOPLE_50_TO_200        => '50-200人',
           self::PEOPLE_200_TO_500       => '200-500人',
           self::PEOPLE_500_TO_1000      => '500-1000人',
           self::PEOPLE_1000_TO_INFINITE => '1000人以上'
        ];
    }

}