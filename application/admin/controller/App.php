<?php
/**
 * Created by PhpStorm.
 * User: xingxu
 * Date: 2019/1/12
 * Time: 15:26
 */
namespace app\admin\controller;
use think\Controller;
use think\facade\Validate;
class App extends Controller {

    public function app_list(){
        $app = model('app')
            ->where('status', 'neq', 9)
            ->order('id DESC')
            ->select();
        $this->assign(['app' => $app]);
        return $this->fetch();
    }

    public function upload()
    {
        if($this->request->isPost()){
            $file = $this->request->file('app');
            if ($file){
                $dir =  'public' . DS . 'uploads' . DS. 'app';
                $info = $file->validate()->move(ROOT_PATH . $dir);
                if ($info) {
                    $url = $_SERVER['SERVER_NAME'] .':' . $_SERVER['SERVER_PORT']. DS . $dir . DS . $info->getSaveName();
                    return outMsg(0, '请求成功', ['url'=> $url]);
                } else {
                    return outMsg(0, $file->getError());
                }
            }
        }
        return $this->fetch();
    }

    public function getappdata(){
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $start = ($page - 1) * $limit;
        $count = model('app')
            ->where('status', 'neq' , 9)
            ->count();
        $data = model('app')
            ->where('status', 'neq', 9)
            ->order('id DESC')
            ->limit($start , $limit)
            ->select();
        echo outTableMsg(0, '成功', $count, $data);
    }

    public function add(){
        $data = $this->request->post();
        $data['upload_time'] = date('Y-m-d H:i:s');
        $data['upload_dir'] = str_replace('\\', '/', $data['upload_dir']);
        $validate = Validate::make(['version|版本号' => 'unique:phone_app',]);

        if (!$validate->check($data)) {
            return outMsg(1, $validate->getError());
        }
        $app = model('app');
        $re = $app->allowField(true)->save($data);
        if($re){
            $index = strrpos($data['upload_dir'], '/');
            $url = substr($data['upload_dir'], 0, $index);
            $index = strrpos($url, '/');
            $url = substr($data['upload_dir'], $index);
            $dir =  'public' . DS . 'uploads' . DS. 'app';
            $app_dir = ROOT_PATH . $dir.'/app/';
            if(!is_dir($app_dir)){
                mkdir($app_dir, 0777, true);
            }
            if(is_file($app_dir.'app.apk')){
                unlink ( $app_dir.'app.apk');
            }
            copy( ROOT_PATH.$dir.$url, $app_dir.'app.apk');
            return outMsg(0, '添加成功');
        } else {
            return outMsg(1, $app->getError());
        }
    }

    public function delete(){
        $id = $this->request->param('id');
    }

}