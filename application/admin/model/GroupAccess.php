<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 22:34
 */
namespace app\admin\model;

class GroupAccess extends Base{

    protected $table = 'hn_auth_group_access';

    public function authGroup(){
        return $this->belongsTo('group', 'group_id', 'id');
    }

    public function user(){
        return $this->belongsTo('user', 'id', 'uid');
    }

    /**
     * 根据用户id获取其角色id
     * @param $uid
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getGroupIdByUid($uid){
        $access = $this->where('uid', $uid)->select();
        $t_access = [];
        foreach ($access as $v){
            $v = $v->toArray();
            if ($v['type'] != 1) {
                $t_access['com_group'] = $v['group_id'];
            }else {
                $t_access['assist_group'] = $v['group_id'];
            }
        }
        return $t_access;
    }


}