<?php

namespace fool;

class Loader {
    // 注册自动加载机制
    public static function register() {
        spl_autoload_register('fool\\Loader::autoload', true, true);
    }

    // 自动加载处理方法
    public static function autoload($class_name) {
        $fileName = str_replace('\\', '/', $class_name) . '.php';
        if(is_file($fileName)){
            require $fileName;
        }else {
            echo $fileName . 'not exist';
        }
    }


}
