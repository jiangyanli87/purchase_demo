<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 16:39
 */
namespace app\admin\controller;

use think\App;
use think\Db;
use Util\data\Sysdb;

class Index extends Base{

	
	//首页设置
    public function index(){
		//登陆用户ID
        return $this->fetch();
    }

	//主页
    public function home(){

        return $this->fetch();
    }

}