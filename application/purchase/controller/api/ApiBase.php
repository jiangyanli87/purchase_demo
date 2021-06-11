<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/8
 * Time: 11:34
 */
namespace app\purchase\controller\api;

use think\Controller;
use think\facade\Cache;
use think\Db;

class ApiBase extends Controller
{

//    //不做校验操作
//    protected $check_out = [
//        'purchase/api.:version.user/login', //用户登录接口
//    ];

    //不做校验操作
    protected $check_out = [
        'p_api/:version/user/login', //用户登录接口
        'p_api/:version/index/test', //用户登录接口
    ];

    //用户信息
    protected $userInfo;

    //初始化方法
    public function initialize()
    {
        $this->checkLogin();
        parent::initialize();
    }

    //检测是否登录
    public function checkLogin()
    {
        $request = request();
//        $c_info = explode('.',$request->controller());
//        //获取接口版本号
//        $version = isset($c_info[1])? $c_info[1] : false;
//        //请求地址，含请求操作
//        $path = strtolower($request->path());
//        $_path = explode('/', $path);
////        var_dump($path);die;
//        $_path[count($_path) - 1] = '*';
//        //请求地址，不含请求操作
//        $_path = implode('/', $_path);
//        if ($version) {
//            //替换接口版本
//            $path = str_replace('.' . $version . '.', '.:version.', $path);
//            $_path = str_replace('.' . $version . '.', '.:version.', $_path);
//        }

        //获取接口版本号
        $version = $request->route()['version']?:false;
        //请求地址，含请求操作
        $path = strtolower($request->path());
        $_path = explode('/', $path);
        $_path[count($_path)-1] = '*';

        //请求地址，不含请求操作
        $_path = implode('/', $_path);
        if($version){
            //替换接口版本
            $path = str_replace('/'.$version .'/', '/:version/',$path);
            $_path = str_replace('/'.$version .'/', '/:version/',$_path);
        }

        $token = $request->header('token');
        if (!in_array($path, $this->check_out) && !in_array($_path, $this->check_out)) {
            if (!$token || !Cache::get($token)) return outEmptyDataMsg(10001, '未登录');
            $user = Db::name('supplier')->where('token', $token)->count();
            if (!$user) return outEmptyDataMsg(10001, '登录超时');
        }
        $userInfo = Cache::get($token);
        $request->userInfo = $userInfo;
        $this->userInfo = $userInfo;
        $request->token = $token;
    }
}