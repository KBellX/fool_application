<?php

namespace fool\exception;

use Exception;
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
            echo 'this is server exception';
            echo '<br />';
            echo $e->getMessage();
        }
    }
}
