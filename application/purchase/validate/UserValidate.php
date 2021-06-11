<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/16
 * Time: 14:17
 */
namespace app\purchase\validate;

/**供应商验证器
 * Class UserValidate
 * @package app\purchase\validate
 */
class UserValidate extends BaseValidate {

    /**
     * 定义验证规则
     * 格式：'字段名'    =>    ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'username|用户名' => 'require|min:2|max:20',
        'password|密码' => 'require|alphaDash|min:6|max:32',
        'openid|微信ID' => 'require',
        'c_password|确认密码' => 'require|alphaDash|confirm:password',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'    =>    '错误信息'
     *
     * @var array
     */
    protected $message = [
        'username.require' => '用户名不能为空',
        'password.require' => '密码不能为空',
        'password.alphaDash' => '密码格式非法',
        'c_password.confirm' => '密码不一致'
    ];

    //配置场景
    protected $scene = [
        'login' => ['username', 'password'], //登录
        'edit_pass' => ['password', 'c_password'], //修改密码
    ];


}