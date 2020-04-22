<?php


namespace App\Enums;


use Illuminate\Support\Collection;

abstract class BaseEnum
{
    private static $constCacheArray = null;

    private static function getConstants(): Collection
    {
        if (self::$constCacheArray == null){
            self::$constCacheArray = [];
        }

        $calledClass = get_called_class();
        if (!array_key_exists($calledClass,self::$constCacheArray)){
            $reflect = new \ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }

        return collect(self::$constCacheArray[$calledClass]);
    }


    /**
     * 返回所有enum的值
     * @return Collection
     */
    public static function getValues() : Collection
    {
        return self::getConstants()->values();
    }

    public static function getKeys($value) : Collection
    {
        return self::getConstants()->search($value);
    }
}