<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 22:35
 */
namespace app\admin\model;

class User extends Base{

    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'create_time';
    protected $updateTime = false;

    /**
     * 关联权限中间表
     * @return $this
     */
    public function groupAccess(){
        return $this->hasMany('group_access', 'uid')->field('uid,group_id,type');
    }

    public function group()
    {
        return $this->hasManyThrough('Group','GroupAccess', 'group_id','uid');
    }

    /**
     * 用户权限检测
     * @param $name   操作目录
     * @param $uid    用户ID
     * @return bool
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function checkAuth($name, $uid){
        $rule_info = $this->getUserMenu($uid);
        $rule_names = array_column($rule_info, 'name');
        if(!in_array($name, $rule_names) && $uid != 1){
            return false;
        }
        return true;
    }

    /**
     * 动态获取用户菜单
     * @param $uid      用户ID
     * @return array    操作菜单
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function getUserMenu($uid){
        $user_info = $this->with('group_access')->get($uid)->toArray();
//        var_dump($user_info);
        if(!$user_info['group_access']) return [];
        $group_ids = array_column($user_info['group_access'], 'group_id');
        $group = new Group();
        $rule_arr = $group->getRuleIdsByIds($group_ids);
        $rule = new Rule();
        $type = 1 == $uid ? true: false;
        $rule_info = $rule->getRules($rule_arr, $type);
        return $rule_info;
    }

    /**
     * 用户登录
     * @param $username  用户名
     * @param $pass      密码
     * @return string    状态码及状态描述
     */
    public function doLogin($username, $pass){
        $user_info = $this->with('group_access')->getByUsername($username);
        if(!$user_info) return outMsg(1, '用户不存在');
        if(1 != $user_info->status) return outMsg(1, '用户状态异常');
        if(md5($pass) != $user_info->password) return outMsg(1, '密码错误');
        $user_info->save(array('last_login_time' => date('Y-m-d H:i:s'), 'last_login_ip' => getClientIP()));
        $tmb_user = $user_info->toArray();
        //获取所属站点 start
        if(!$tmb_user['group_access']) return [];
        //获取所属站点 end
        session('username',$user_info->username);
        session('user_id',$user_info->id);
        xLog('用户操作','登录','<b>登录时间：</b>'.date('Y-m-d H:i:s'));
        return outMsg(0, '登录成功');
    }

    /**
     * @param array $where
     * @param int $start
     * @param int $limit
     * @param string $fields
     * @return string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getTableData($where = [], $start = 1, $limit = 10, $fields = '*', $with = null){
        //排除删除用户
        $where[] = ['status','neq', 9];
        $count = $this->where($where)
            ->field('id')
            ->order('id DESC')
            ->count();
        $data = $this->with('group_access')
                    ->where($where)
                    ->field($fields)
                    ->order('id DESC')
                    ->limit($start, $limit)
                    ->select();
         $tmb_data = [];
        foreach ($data as $k => $v){
           $v = $v->toArray();
           $tmb_data[$k] = $v;
           $tmb_data[$k]['auth'] = ['auth' => '无', 'assist' => '无'];
           foreach ($v['group_access'] as $kk => $vv){
              if($vv['type'] == 1) {
                  $assist = model('group')->where('id', $vv['group_id'])->value('title');
                  $tmb_data[$k]['auth']['assist'] = $assist?:'无';
              } else {
                  $auth = model('group')->where('id', $vv['group_id'])->value('title');
                  $tmb_data[$k]['auth']['auth'] = $auth ?: '无';
              }
           }
        }
        //var_dump($data);die;
        return outTableMsg(0, '查询成功', $count, $tmb_data);
    }

}