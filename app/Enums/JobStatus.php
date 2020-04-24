<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class JobStatus extends BaseEnum
{
    const NOT_WORK_LOOKING_JOB= 1;
    const ON_JOB_PLAN_CHANGE_JOB = 2;
    const ON_JOB_BETTER_CHANCE = 3;
    const NO_CONSIDER = 4;


    public static function labMaps(){
        return [
            self::NOT_WORK_LOOKING_JOB                => '不在职,正在找工作',
            self::ON_JOB_PLAN_CHANGE_JOB           => '在职,打算近期换工作',
            self::ON_JOB_BETTER_CHANCE           => '在职,有更好的机会才考虑',
            self::NO_CONSIDER           => '不考虑换工作',
        ];
    }

}