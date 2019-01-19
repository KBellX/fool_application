<?php
// namespace fool;

defined("ROOT_PATH") || define("ROOT_PATH", __DIR__);
defined("FOOL_PATH") || define("FOOL_PATH", ROOT_PATH . '/fool');

require_once ROOT_PATH . '/config.php';

// 自动加载

require __DIR__ . '/fool/base.php';

use app\controller\User;

$user = new User();
$user->index();

use fool\Db;

$db = Db::instance();
