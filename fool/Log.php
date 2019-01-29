<?php

namespace fool;

use fool\Config;
use fool\exception\ConfigException;

/*
 * 日志类
 * */

class Log
{
    /*
     * 日志类型（等级）
     * */
    const INFO = 'INFO';

    const DEBUG = 'DEBUG';

    const WARNING = 'WARNING';

    const ERROR = 'ERROR';

    const SQL = 'SQL';
    /*
     * @ var array 写入驱动类型
     * */
    private static $driverType = ['db', 'file'];

    /*
     * @ var string 写入驱动
     * */
    private static $driver = 'file';

    /*
     * @ array 写入驱动配置信息
     * */
    private static $dirverInfo = [];


    /*
     * @ array 写入（类型）等级
     * */
    private static $alloSaveType = [];

    /*
     * 初始化
     * 何时调用？public?
     * */
    public static function init()
    {
        $config = Config::get('log');       
        var_dump($config);
        if (isset($config['driver'])  ) {
            if (!in_array($config['driver'], static::$driverType)) {
                throw new ConfigException(7001, $config['driver'] . ' log driver is not allowed');
            }

            static::$driver = $config['driver'];
        }
    }

    /*
     * 提供对外记录日志方法
     * */
    public static function record($type, $msg)
    {
    
    }
}
