<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/8
 * Time: 11:36
 */
namespace app\purchase\controller\admin;


use think\Controller;
use think\Db;
class AdminBase extends Controller{

    //前置方法
    protected $beforeActionList = [
        'getStation','getMaterialCateGory'
    ];

    //绑定站点数据
    public function getStation(){
        $station_name = session('station');
        $station = explode(',', $station_name);
        $this->assign(['station_name' => $station_name, 'station' => $station]);
    }

    //材料大类
    public function getMaterialCateGory(){
        $cates = Db::name('material_category')->field('id,c_name')->select();
        $this->assign(['cates' => $cates]);
    }
    /**
     * 模板渲染
     * @param array $data
     * @param bool $template
     * @return mixed
     */
    public function new_fetch($data = [],$template = false){
        $controller = request()->controller();
        $controller = substr($controller, stripos($controller,'.') + 1);
        $action = request()->action();
        $template = $template !== false ? $template : $controller . DS . $action ;
        return $this->fetch($template, $data);
    }

    /**
     * 发送采购微信模板消息
     */
    protected static function sendWxMsg(){

    }
}