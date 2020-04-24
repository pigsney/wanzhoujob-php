<?php


namespace App\Enums;


use App\Kernels\BaseEnum;

class CompanyNature extends BaseEnum
{
    const JOINT_VENTURE = 1;
    const PRIVATE_ENTERPRISE = 2;
    const STATE_ENTERPRISE = 3;
    const NONGOVERNMENTAL_ENTERPRISE = 4;


    public static function labMaps(){
        return [
            self::JOINT_VENTURE              => '合资企业',
            self::PRIVATE_ENTERPRISE         => '私营企业',
            self::STATE_ENTERPRISE           => '国有企业',
            self::NONGOVERNMENTAL_ENTERPRISE => '民营企业',
        ];
    }

}