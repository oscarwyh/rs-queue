<?php


namespace Laura\Module\Queue\StreamQueue;


use Exception;
use Throwable;

class SQException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
