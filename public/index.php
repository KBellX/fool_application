<?php

define('DS', DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(__DIR__) . DS);

// 定义环境 dev|prod
define('ENV', 'prod');
// define('ENV', 'dev');

require ROOT_PATH . 'fool/base.php';

\fool\App::run();

