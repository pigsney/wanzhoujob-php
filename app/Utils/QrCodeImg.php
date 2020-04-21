<?php


namespace App\Utils;


use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeImg
{
    public static function createQrCode($id=null,$size=null)
    {

        $size = $size ?? 400;
        $name = $id ?? 0; //需要引入权限才知道登陆的人是谁
        $info = sprintf('这是%s的推广二维码',$name);

        return QrCode::size($size)->encoding('UTF-8')->color(50,255,100)->generate($info);

    }
}