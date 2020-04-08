<?php


namespace App\Enums;


use Illuminate\Support\Collection;

class BaseEnum
{
    /**
     * 返回所有enum的值
     * @return Collection
     */
    public static function getValues() : Collection
    {
        return collect([]);
    }
}