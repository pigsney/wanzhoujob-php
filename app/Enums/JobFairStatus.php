<?php


namespace App\Enums;


class JobFairStatus extends BaseEnum
{
    const ENABLE_RESERVE = 1;
    const SUSPEND_RESERVE = 2;
    const ALREADY_RESERVE = 3;
    const FINISH_RESERVE = 4;

    public static function labMaps()
    {
        return [
            self::ENABLE_RESERVE  => "可预定",
            self::SUSPEND_RESERVE => '暂停预定',
            self::ALREADY_RESERVE => '已预订',
            self::FINISH_RESERVE  => '结束',
        ];
    }
}