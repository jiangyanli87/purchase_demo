<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 16:40
 */
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use think\facade\Session;
use Util\data\Sysdb;

class Base extends Controller{

    /**
     * 初始化
     */
    public function initialize()
    {
        $this->checkAuth();
        $this->getMenu();
    }

    /**
     * 权限检查
     * @return bool
     */
    protected function checkAuth()
    {
        $path =strtolower(Request::module() . '/' . Request::controller() . '/' . Request::action());
	    $_path = strtolower(Request::module() . '/' . Request::controller() . '/*');
        // 排除权限
        $not_check = ['/','admin/index/index','admin/index/*','admin/index/carnum','admin/index/send','admin/index/cartype','admin/index/carstatus','admin/index/welcome','admin/index/home', 'admin/authgroup/getjson', 'admin/system/clear', 'admin/index/defaulthome'];
        if (!in_array($path, $not_check) &&  !in_array($_path, $not_check)) {
            $admin_id = Session::get('user_id');
            $auth     = model('user');
            if (!$auth->checkAuth($path, $admin_id) && $admin_id != 1) {
                $this->error('没有权限','');
            }
        }
    }

    /**
     * 获取侧边栏菜单
     */
    protected function getMenu()
    {
        $admin_id       = Session::get('user_id');
        $menu = model('user')->getUserMenu($admin_id);
        //var_dump($menu);
        $menu = !empty($menu) ? array2tree($menu) : [];
        //var_dump($menu);
        $this->assign('menu', $menu);
	
    }
}