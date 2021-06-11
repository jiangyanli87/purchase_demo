<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/8
 * Time: 11:23
 */
namespace app\admin\validate;

use think\Validate;

class Group extends Validate{

    protected $rule = [
        'title|角色名' => 'require|unique:auth_group|min:2',
    ];

    protected $message = [];

    protected $scene = [
        'add' => ['title'],
        'edit' => ['title']
    ];

}