<?php

namespace fool\exception;


/*
 * 800
 * */
use fool\Exception;

class ConfigException extends Exception
{
    public function __construct($msg = 'config exception', $code = 800)
    {
        parent::__construct($msg, $code);
    }
}

