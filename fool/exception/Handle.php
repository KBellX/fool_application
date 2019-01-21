<?php

namespace fool\exception;

use Exception;
use fool\Logger;
/*
 * 异常处理类
 *  写成类方便以后扩展
 * */

class Handle
{
    /*
     * @param \Exception $e php根异常
     * @return Response
     * */
    public function render(Exception $e)
    {
        if ($e instanceof ApiException) {
            echo 'this is api exception, render friendly response';
        } else {
            // 开发环境
            
            // 生成环境
            Logger::log(Logger::ERROR, $e->getMessage(), $e->getCode());
        }
    }
}
