<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 22:05
 */
namespace app\admin\controller;

use admin\Auth;
use think\Controller;
use think\Db;
use think\db\Where;
use think\Request;
use think\facade\Session;
use think\Validate;
use Util\data\Sysdb;

class User extends Controller {


    /**
     * 权限检查
     * @return bool
     */
    protected function checkAuth()
    {
        $request =  $this->request;
        $path = $request->module() . '/' . $request->controller() . '/' . $request->action();
        // 排除权限
        $not_check = ['/','admin/Index/index','admin/Index/welcome','admin/Index/home', 'admin/AuthGroup/getjson', 'admin/System/clear'];
        if (!in_array($path, $not_check)) {
            $admin_id = Session::get('user_id');
            $auth     = model('user');
            if (!$auth->checkAuth($path, $admin_id) && $admin_id != 1) {
                $this->error('没有权限','');
            }
        }
    }

    //用户登录
    public function login(){
        $request =  $this->request;
        if($request->isPost()){
          $post = $request->post();
            //if(!captcha_check($post['code'])){
              // return outMsg(1, '验证码错误');
            //};
            $result = $this->validate($post,'app\admin\validate\User.login');
            if(true !== $result){
                // 验证失败 输出错误信息
                return outMsg(1, $result);
            }
            model('user')->doLogin($post['username'], $post['password']);
        }
        return $this->fetch();
    }

    //用户登出
    public function loginOut(){
        xLog('用户操作','退出','<b>退出时间：</b>'.date('Y-m-d H:i:s',time()));
        session('username', null);
        session('user_id', null);
        $this->redirect('/');
    }

    //切换用户状态
    public function changeStatus(){
        $request =  $this->request;
        $params = $request->param();
        $user_info = model('user')->get($params['id']);
        $re = $user_info->save(['status' => $params['status']]);
        if($re !== false) return outMsg(0, '状态切换成功');
        return outMsg(1, '状态切换失败');
    }
	//授权下单
    public function changeStatus1(){
        $request =  $this->request;
        $params = $request->param();
        $user_info = model('user')->get($params['id']);
        $re = $user_info->save(['sell_status' => $params['sell_status']]);
        if($re !== false) return outMsg(0, '授权成功');
        return outMsg(1, '授权失败');
    }

    //用户列表
    public function userList(){
        $search_info = [
            'username' => '用户名',
        ];
        $this->assign(['search_info' => $search_info]);
        return $this->fetch();
    }

    //用户数据
    public function getlistData(){
        $request =  $this->request;
        $params = $request->param();
        $page = $params['page'];
        $limit = $params['limit'];
        $start = ($page - 1) * $limit;
        $where = [];
        if(isset($params['search_key'])) $where[] = [$params['search_key'],'like', '%' .trim($params['search_val']). '%'];
        return model('user')->getTableData($where, $start, $limit);
    }

    //添加用户
    public function add(){
        $request =  $this->request;
         if($request->isPost()){
             $param = $request->param();
             if($param['password'] == ''){
                $param['password'] = 123456;
             }
             $result = $this->validate($param,'app\admin\validate\User.add');
             if(true !== $result){
                 // 验证失败 输出错误信息
                 return outMsg(1, $result);
             }
             $user = model('user');
             $re = $user->allowField(true)->save([
                 'username' => $param['username'],
                 'password' => md5($param['password']),
                 'last_login_ip' => '0.0.0.0'
             ]);
             if($re === false ) return outMsg(1, '添加失败');
             $g_data = [
                 ['uid' => $user->id, 'group_id' => $param['group_id']]
             ];
             if($param['assist_group_id']) $g_data[] = ['uid' => $user->id, 'group_id' => $param['assist_group_id'] ,'type' => 1];
             
             model('group_access')->saveAll($g_data);
             return outMsg(0, '添加成功');
         }
        $auth_group = model('group')->getAll();
        $this->assign(['auth_group' => $auth_group]);
        return $this->fetch();
    }

    //删除用户
    public function del(){
        $request =  $this->request;
        $id = $request->param('id');
        $re = model('user')->where('id', $id)->delete();
        if($re === false) return outMsg(1, '删除失败');
        model('group_access')->where('uid', $id)->delete();
        return outMsg(0, '删除成功');
    }

    //编辑用户
    public function edit(){
        $request =  $this->request;
        $id = $request->param('id');
        $user = model('user')->get($id);
        $access = model('group_access')->getGroupIdByUid($id);
        $user['auth'] = $access;
        if($request->isPost()){
            $post = $request->post();
            if($post['password'] == ''){
                unset($post['password']);
                $validate  = 'app\admin\validate\User.edit';
            } else {
                $post['password'] = md5($post['password']);
                $validate = 'app\admin\validate\User.add';
            }
            //修改密码验证规则
            $result = $this->validate($post, $validate);
            if(true !== $result){
                // 验证失败 输出错误信息
                return outMsg(1, $result);
            }
            $re = $user->allowField(true)->save($post);
            //修改辅助角色
            if(isset($post['open_assist']) && $post['open_assist'] == 'on'){
                if(isset($user['auth']['assist_group'])){
                    Db::name('auth_group_access')->where(['uid' => $id, 'type' => 1])->update(['group_id' => $post['assist_group_id']]);
                } else{
                    Db::name('auth_group_access')->insert(['group_id' => $post['assist_group_id'],'type' => 1,'uid' => $id]);
                }
            }else{
                Db::name('auth_group_access')->where(['uid' => $id, 'type' => 1])->delete();
            }
            //var_dump($post);die;
            //修改普通角色
            Db::name('auth_group_access')->where(['uid' => $id, 'type' => 0])->update(['group_id' => $post['group_id']]);
            $a = Db::name('user')->where(['id'=>$id])->find();
            if($re !== false)
            return outMsg(0, '编辑成功');
            return outMsg(1, '编辑失败');
        }
        $auth_group = model('group')->getAll();
        $this->assign(['auth_group' => $auth_group,'user' => $user]);
        return $this->fetch();
    }

    //修改密码
    public function changePwd(){
        return $this->fetch();
    }
    public function savePwd(){
        $id = input('post.user_id');
        $password = input('post.password');
        $pwd = input('post.pwd');
        if (empty($password)){
            return outMsg(1,'请输入密码');
        }
        $validate = new Validate();
        $validate->rule([
            'password|密码' => 'require|alphaDash|min:6|max:12',
        ]);
        $data = [
            'password'=>$password
        ];
        //判断传入的数据是否符合验证规则，若不符合返回错误信息
        if (!$validate->check($data)){
            return outMsg(1,$validate->getError());
        }
        if ($data['password']!=$pwd){
            return outMsg(1,'密码输入不一致');
        }
        $data['isupdatepwd'] = 1;
        $data['password'] = md5($password);
        $res = $this->db->table('user')->where(array('id'=>$id))->update($data);
        if ($res==0){
            return outMsg(1,'您的密码未修改');
        }else{
            session('username',null);
            session('user_id',null);
            return outMsg(0,'密码修改成功');
        }
    }

    //系统日志
    public function userLog(){
        $data = Db::name('log_type')->select();	//echo Db::table('log_type')->getLastSql();die;
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function logData(){
        $limit = input('get.limit');
        $page = input('get.page');
        $start = ($page -1) * $limit;
        $username = input('get.username');
        $typeid = input('get.typeid');
        $before = input('get.beforeTime')?:date('Y-m-d 00:00:00');
        $end = input('get.endTime')?: date('Y-m-d H:i:s');

        $where = array();
        $where[] = [
            'a.create_time', 'between', [$before, $end]
        ];
        if($typeid && !empty($typeid)) $where[] = ['typeid', '=', $typeid];
        if($username && !empty($username)) $where[] = ['username', '=', $username];
        $data = Db::name('user_log a')
            ->join('log_type b', 'a.typeid=b.id')
            ->where($where)
            ->limit($start, $limit)
            ->select();
        $count = Db::name('user_log a')
            ->join('log_type b', 'a.typeid=b.id')
            ->where($where)
            ->count();
        return outTableMsg(0, '', $count, $data);
    }
    public function logDel(){
        $id = input('post.id');
        $res = Db::name('user_log')->where(array('id'=>$id))->delete();
        if ($res){
            return outMsg(0,'日志删除成功');
        }else{
            return outMsg(1,'日志删除失败');
        }
    }
    //供应商信息管理
    public function suppliers(){
        $this->assign('title',"supplier");
        return $this->fetch();

    }
}