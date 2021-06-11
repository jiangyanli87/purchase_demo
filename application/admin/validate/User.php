<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/7
 * Time: 10:57
 */
namespace app\admin\validate;

use think\Validate;

class User extends Validate{

    protected $rule = [
        'username|用户名' => 'require|unique:user|min:2',
        'password|密码' => 'require|min:6'
    ];

    protected $message = [];

    protected $scene = [
        'login' => ['username' => 'require|min:2', 'password'],
        'add' => ['username', 'password'],
        'edit' => ['username']
    ];

}