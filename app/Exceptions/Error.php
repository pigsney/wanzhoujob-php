<?php


namespace App\Exceptions;


class Error
{
    public static function errMsg($code)
    {
        $maps = static::getErrs();
        return isset($maps[$code]) ? $maps[$code] : '未知错误';
    }

    public static function getErrs()
    {
        return [
            '404' => '页面找不到',
            '500' => '服务器错误',
        ];
    }
}