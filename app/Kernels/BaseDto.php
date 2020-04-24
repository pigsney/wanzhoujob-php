<?php


namespace App\Kernels;


abstract class BaseDto
{
    private $strict = false;

    private $optional = [];

    public function __construct(array $attributes=[], bool $strict = false)
    {
        $this->strict = $strict;
        $this->fill($attributes);
    }

    /**
     * @param array $attributes
     * @throws \JsonMapper_Exception
     */
    private function fill(array $attributes) : void
    {
        if (empty($attributes)) return;

        try {
            (new \JsonMapper())->map(json_decode(json_encode($attributes)), $this);
        } catch (\JsonMapper_Exception $e) {
            if (config('app.debug')) {
                throw $e; // 调试模式下，不可忽略 DTO 赋值错误
            }
        }
    }
}