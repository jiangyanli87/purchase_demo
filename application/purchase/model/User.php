<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/16
 * Time: 14:10
 */
namespace app\purchase\model;

use think\facade\Cache;

class User extends BaseModel
{

    protected $name = 'supplier'; //表
    protected $hidden = ['password']; //隐藏字段

    //关联供应商可供材料名称
    public function mName()
    {
        return $this->hasMany('supplier_info', 'supp_num','supp_num')
            ->where('goods_spec' , '')
            ->whereOr('goods_spec' , Null)
            ->group('goods_name');
    }

    //关联供应商可供材料名称和规格
    public function spec()
    {
        return $this->hasMany('supplier_info', 'supp_num', 'supp_num')
            ->where('goods_spec' ,'<>', '')
            ->where('goods_spec' ,'<>', Null);
    }

    //用户名密码登录
    public function login()
    {
        $params = request()->post();
        //判断用户是否存在
        $user = $this->isExist($params);
        if (!$user) return outEmptyDataMsg(11001, '用户名错误');
        //检测密码是否正确
        $this->checkPassword($params['password'], $user->password);
        //判断用户状态
        //获取token
        $token = $this->createUserToken($user->toArray());
        $user->token = $token;
        $user->save();
        return ['token' => $token, 'userInfo' => $user->toArray()];
    }

    //创建用户登录token
    public function createUserToken($arr)
    {
        //生成token
        $token = sha1(md5(uniqid(md5(microtime(true)), true)));
        //获取有效期
        $expire = array_key_exists('expires_in', $arr) ?
            $arr['expires_in'] :
            config('api.token_expire');
        $arr['token'] = $token;
        $arr['expires_in'] = $expire;
        //存入缓存，存入失败抛出异常
        if (!Cache::set($token, $arr, $expire)) return outEmptyDataMsg(9999, '服务器异常');
        return $token;
    }

    //判断用户是否存在
    public function isExist($arr)
    {
        if (array_key_exists('username', $arr)) {
            $user = $this->where('username', $arr['username'])->find();
            if ($user) $user->loginType = 'username';
            return $user;
        }
        return false;
    }

    //检测密码是否正确
    public function checkPassword($post_pass, $password)
    {
        if (md5($post_pass) != $password) return outEmptyDataMsg(11002, '密码错误');
        return true;
    }

    //退出登录
    public function logOut()
    {
        if (!Cache::pull(request()->token)) return outEmptyDataMsg(11003, '你已退出登录');
        return true;
    }

    //修改密码
    public function editPassword(){
        $params = request()->param();
        $uid = request()->userInfo['id'];
        $user = $this->where('id', $uid)->find();
        $user->password = md5($params['password']);
        $res = $user->save();
        if($res) return outEmptyDataMsg(200, '修改成功');
        return outEmptyDataMsg(11004, '密码修改失败');
    }

    //获取供应商供应材料以及材料-规格
    public function getSuppMnameAndSpec($uid){
        $user = $this->where('id', $uid)->with(['mName'=>function($query){
            return $query->field('goods_name as m_name,supp_num')->hidden(['supp_num']);
        },'spec'=>function($query){
            return $query->field('goods_name as m_name, goods_spec as spec,supp_num')->hidden(['supp_num']);
        }])->find();
        if($user) {
           $user = $user->toArray();
           return ['m_name' => $user['m_name'], 'spec' => $user['spec']];
        }
        return false;
    }

}