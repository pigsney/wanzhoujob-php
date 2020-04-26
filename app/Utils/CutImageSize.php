<?php


namespace App\Utils;


use App\Exceptions\ForbiddenException;
use Intervention\Image\Facades\Image;


final class CutImageSize
{
    public static $config;

    public static function cut(string $path,string $cutPath,?string $size)
    {
        self::$config = config('cutimagesize');
        if (is_null($size)){
            $pathArr = explode('/',$path);
            $keyword = $pathArr[1];
            $size = self::$config[$keyword];//默认尺寸
        }

        try {
            list($longSize,$wideSize) = explode('*',$size);
        }catch (\Exception $exception){
            throw new ForbiddenException('您传入的尺寸不符合，应带有*符号');
        }
        $img = Image::make($path)->resize($longSize,$wideSize);
        $img->save($cutPath);
    }
}