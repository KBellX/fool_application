<?php

namespace fool;

use fool\exception\Handle;

class Error
{
    /*
     * 注册异常处理
     * @return void
     * */
    public static function register()
    {
        set_exception_handler([__CLASS__, 'appException']);
    }

    /*
     * 异常处理函数
     * @param \Exception
     * @return void
     * */
    public static function appException($e)
    {
        $handler = self::getExceptionHandler();
        $handler->render($e);
    }

    /*
     * 获取异常处理实例
     * @return Handle
     * */
    private static function getExceptionHandler()
    {
        // 如果没定义，就用默认的
        // 有定义，要判断是否继承了 异常处理基类
        $handler = new Handle();
        return $handler;
    }
}
