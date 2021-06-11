<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/15
 * Time: 22:53
 */
namespace app\purchase\controller\api\v1;

use app\purchase\controller\api\ApiBase;
use app\purchase\validate\UserValidate;
use app\purchase\model\User as UserModel;

class User extends ApiBase{

    //用户登录
    public function login(){
        (new UserValidate())->goCheck('login', 'post');
        $u_info = (new UserModel())->login();
        return outMsg(200, '登录成功', $u_info);
    }

    //退出登录
    public function logOut(){
        (new UserModel())->logOut();
        return outEmptyDataMsg(200, '退出成功');
    }

    //修改密码
    public function editPass(){
        (new UserValidate())->goCheck('edit_pass', 'post');
        (new UserModel())->editPassword();
    }
}