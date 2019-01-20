<?php

defined("FOOL_PATH") || define("FOOL_PATH", ROOT_PATH . '/fool');
defined("APP_PATH") || define("APP_PATH", ROOT_PATH . '/app');
define('DS', DIRECTORY_SEPARATOR);
define('EXT', '.php');
defined("EXTEND_PATH") || define("EXTEND_PATH", ROOT_PATH . '/extend');

require FOOL_PATH . '/Loader.php';


// 注册自动加载类
\fool\Loader::register();

// 注册异常处理
\fool\Error::register();

// 加载配置文件
require_once ROOT_PATH . '/config.php';
