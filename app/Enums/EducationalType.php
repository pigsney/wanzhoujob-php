<?php


namespace App\Enums;


class EducationalType extends BaseEnum
{
    const ACADEMIC_EDUCATION = 1;
    const SKILLS_TRAINING = 2;

    public static function labMaps()
    {
        return [
            self::ACADEMIC_EDUCATION  => "学历教育",
            self::SKILLS_TRAINING => '技能培训',
        ];
    }


}