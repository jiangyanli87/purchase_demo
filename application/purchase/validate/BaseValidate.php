<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/16
 * Time: 0:12
 */
namespace app\purchase\validate;

use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck($scene = false, $method = false){
        if($method && strtolower(request()->method()) !== strtolower($method)) return outEmptyDataMsg(9999,'请求方法错误');
        $params = request()->param();
        $check = $scene ?
            $this->scene($scene)->check($params) :
            $this->check($params);
        if(!$check){
            return outEmptyDataMsg(10000, $this->getError());
        }
        return true;
    }

    //判断验证码是否与缓存中一致
    protected function isDiffer($value,$rule,$data=[])
    {
        $catch_code = cache($data['phone']);
        if(!$catch_code || $catch_code != $value)
            return outEmptyDataMsg(20001, '验证码过期');
        return true;
    }

    //判断用户是否存在
    protected function isUserExist($value,$rule,$data=[]){
        if($value == 0) return true;
        if(\app\common\model\User::get($value)) return true;
        return '该用户已不存在';
    }

    //不能为空
    public function notEmpty($value,$rule,$data=[] , $field){
        if(empty($value)) return $field . '不能为空';
        return true;
    }
}