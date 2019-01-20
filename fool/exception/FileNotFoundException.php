<?php

namespace fool\exception;

use fool\Exception;

class FileNotFoundException extends Exception
{
    public function __construct($file, $code = 600)
    {
        parent::__construct($file . 'is not exist', $code);
    }
}

