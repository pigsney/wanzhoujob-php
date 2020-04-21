<?php


namespace App\Exceptions;


use Throwable;

class NotFoundException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}