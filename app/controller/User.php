<?php
namespace app\controller;

use app\model\User as UserModel;

use fool\exception\ApiException;

class User {
    public function index() {
        /*
        echo 'this is controller';
        $model = new UserModel();
        $model->getList();
        */

        throw new ApiException('用户传参错误', 101);


        return [
            'a' => 'b',
            'c' => 'd'
        ];
    }

}
