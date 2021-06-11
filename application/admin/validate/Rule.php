<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/9
 * Time: 10:07
 */
namespace app\admin\validate;
use think\Validate;

class Rule extends Validate{

    protected $rule = [
        'title|权限名称' => 'require|unique:auth_rule|min:2',
        'name|访问路由' => 'require|unique:auth_rule|min:2',
    ];

    protected $message = [];

    protected $scene = [
        'add' => ['title' , 'name'],
        'edit' => ['title', 'name']
    ];

}