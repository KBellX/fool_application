<?php
namespace app\controller;

use app\model\User as UserModel;

class User {
    public function index() {
        echo 'this is controller';
        $model = new UserModel();
        $model->getList();
    }

}
