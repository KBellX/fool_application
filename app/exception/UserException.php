<?php

namespace app\exception;

use fool\exception\ApiException;

class UserException extends ApiException
{
    public $code = 1000;

    public $message = 'user exception';
}
