<?php


namespace App\Http\Controllers;


use App\Utils\QrCodeImg;

class UserController
{
    public function makeQrCode()
    {
        return QrCodeImg::createQrCode(auth()->id());
    }
}