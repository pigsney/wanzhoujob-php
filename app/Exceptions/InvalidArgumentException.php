<?php


namespace App\Exceptions;


use Throwable;

class InvalidArgumentException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 422, $previous);
    }
}