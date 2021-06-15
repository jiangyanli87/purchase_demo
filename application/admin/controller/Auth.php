<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/8
 * Time: 9:08
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;
class Auth extends Controller
{
    //权限列表
    public function ruleList()
    {
        $search_info = [
            'title' => '顶级权限名称'
        ];
        $this->assign(['search_info' => $search_info]);
        return $this->fetch();
    }

    //获取权限数据
    public function getRuleData(){
        $request =  $this->request;
        $params = $request->param();
        $where = [];
        if(isset($params['search_key'])) $where[] = [$params['search_key'],'like', '%' .trim($params['search_val']). '%'];
        $where[] = ['status', 'neq', 9];
        $rules = model('rule')->getAll($where);
        $rules = array2level($rules);
        return outTableMsg(0, '', count($rules), $rules);
    }


    //添加权限
    public function addRule()
    {
        $request = $this->request;
        if($request->isPost()){
            $post = $request->post();
            $result = $this->validate($post,'app\admin\validate\Rule.add');
            if(true !== $result){
                // 验证失败 输出错误信息
                return outMsg(1, $result);
            }
            $post['status'] = $post['status'] == 1 ?1:2;
            $role = model('rule');
            $re = $role->allowField(true)->save($post);
            if($re !== false)
            return outMsg(0, '添加成功');
            return outMsg(1, '添加失败');
        }
        $where[] = ['status', 'neq', 9];
        $rules = model('rule')->getAll($where);
//        $pid = isset($params['pid'])?$params['pid']:0;
        $rules = array2level($rules);
        $this->assign(['rules' => $rules]);
        return $this->fetch();
    }
    //编辑权限
    public function editRule()
    {
        $request = $this->request;
        $id = $request->param('id');
        $rule = model('rule')->get($id);
        if($request->isPost()){
            $post = $request->post();
            $top_rule = [3,4,5,6];
        //    if(in_array($id, $top_rule)){
        //        return outMsg(1, '系统菜单无法编辑');
        //    }
            $result = $this->validate($post,'app\admin\validate\Rule.edit');
            if(true !== $result){
                // 验证失败 输出错误信息
                return outMsg(1, $result);
            }
            $re = $rule->allowField(true)->save($post);
            if($re !== false) return outMsg(0, '编辑成功');
            return outMsg(1, '编辑失败');
        }
        $where[] = ['status', 'neq', 9];
        $rules = model('rule')->getAll($where);
        $rules = array2level($rules);
        $this->assign(['rule' => $rule,'rules' => $rules]);
        return $this->fetch();
    }

    //切换角色状态
    public function changRuleStatus(){
        $request =  $this->request;
        $params = $request->param();
        $user_info = model('rule')->get($params['id']);
        $re = $user_info->save(['status' => $params['status']]);
        if($re !== false) return outMsg(0, '状态切换成功');
        return outMsg(1, '状态切换失败');
    }
    //删除权限
    
    public function delRule()
    {
        $request =  $this->request;
        $id = $request->param('id');
        $top_rule = [3,4,5,6];
        if(in_array($id, $top_rule)){
            return outMsg(1, '系统菜单无法删除');
        }
        $re = model('rule')->where('id', $id)->delete();
        if($re === false) return outMsg(1, '删除失败');
        return outMsg(0, '删除成功');
    }

    //异常字符串处理
    public function checkStr($str)
    {
        switch ($str) {
            case strspn($str, '&#;') > 0:
                $str = ltrim($str, '&#');
                $str = rtrim($str, ';');
                return $str;
            default:
                return $str;
                break;
        }
    }

    //角色列表
    public function roleList(){
        $search_info = [
            'title' => '角色',
            'station' => '站点'
        ];
        $this->assign(['search_info' => $search_info]);
        return $this->fetch();
    }

    //获取角色数据
    public function getRoleData(){
        $request =  $this->request;
        $params = $request->param();
        $page = $params['page'];
        $limit = $params['limit'];
        $start = ($page - 1) * $limit;
        $where = [];
        if(isset($params['search_key'])) $where[] = [$params['search_key'],'like', '%' .trim($params['search_val']). '%'];
        return model('group')->getTableData($where, $start, $limit);
    }

    //增加角色
    public function addRole(){
        $request = $this->request;
        if($request->isPost()){
            $post = $request->post();
            $result = $this->validate($post,'app\admin\validate\Group.add');
            if(true !== $result){
                // 验证失败 输出错误信息
                return outMsg(1, $result);
            }
            $role = model('group');
            $re = $role->allowField(true)->save($post);
            if($re !== false) return outMsg(0, '添加成功');
            return outMsg(1, '添加失败');
        }
        $station = Db::name('base_data')->where('type', '站点')->column('name');
        $this->assign(['station' => $station]);
        return $this->fetch();
    }

    //切换角色状态
    public function changRoleStatus(){
        $request =  $this->request;
        $params = $request->param();
        $user_info = model('group')->get($params['id']);
        $re = $user_info->save(['status' => $params['status']]);
        if($re !== false) return outMsg(0, '状态切换成功');
        return outMsg(1, '状态切换失败');
    }


    //编辑角色
    public function editRole(){
        $request =  $this->request;
        $id = $request->param('id');
        $role = model('group')->get($id);
        if($request->isPost()){
            $post = $request->post();
            if($post['id'] == 1){
                return outMsg(1, '超级管理组无法编辑');
            }
            $result = $this->validate($post,'app\admin\validate\Group.edit');
            if(true !== $result){
                // 验证失败 输出错误信息
                return outMsg(1, $result);
            }
            $re = $role->allowField(true)->save($post);
            if($re !== false) return outMsg(0, '编辑成功');
            return outMsg(1, '编辑失败');
        }
        $station = Db::name('base_data')->where('type', '站点')->column('name');
        $this->assign(['station' => $station, 'role' => $role]);
        return $this->fetch();
    }

    //删除角色
    public function delRole(){
        $request =  $this->request;
        $id = $request->param('id');
        if($id == 1){
            return outMsg(1, '超级管理组无法删除');
        }
        $re = model('group')->where('id', $id)->delete();
        if($re === false) return outMsg(1, '删除失败');
        return outMsg(0, '删除成功');
    }

    //给角色授权
    public function authToRole(){
        $request =  $this->request;
        $id = $request->param('id');
        $role = model('group')->get($id);
        if($request->isPost()){
            $params = $request->param();
            $auth_list = isset($params['auth_list']) ? analyTreeData($params['auth_list']):[];
            $rules = '';
            if(!empty($auth_list)) $rules = implode(',', array_column($auth_list,'id'));
            $re = $role->save(['rules' => $rules]);
            if($re !== false) return outMsg(0, '授权成功');
            return outMsg(1, '授权失败');
        }
        return $this->fetch('auth', ['role' => $role]);
    }

    //获取权限数据
    public function getAuth(){
        $request =  $this->request;
        $rules = $request->param('rules');
        $rule_arr = explode(',', $rules);
        $rule = model('rule')->getPrepData($rule_arr);
        return outMsg(0, '', ['tree' => array2tree($rule),'rules' => $rules]);
    }


    public function sysIcon(){
        return $this->fetch('icon');
    }


       //供应商信息管理
       public function suppliers(){
        $this->assign('title',"supplier");
        return $this->fetch();

    }
//    public function test(){
//        $request = $this->request;
//        $params = $request->param();
//        //var_dump($params['checkedData']);die;
//        $data = analyTreeData($params['checkedData']);
//        var_dump($data);
//    }

}