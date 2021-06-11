<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 22:35
 */

namespace app\admin\model;

class Group extends Base
{

    protected $name = 'auth_group';

    /**
     * 根据角色ID集合获取权限ID集合
     * @param $group_id_arr
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getRuleIdsByIds($group_id_arr)
    {
        $where = [
            'status' => 1,
            'id' => $group_id_arr
        ];
        $group_arr = $this->where($where)->select()->toArray();
        $tmb_rule_arr = array_column($group_arr, 'rules');
        $rules = implode(',', $tmb_rule_arr);
        $rule_arr = explode(',', $rules);
        return $rule_arr;
    }

    /**
     * 获取所有数据
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAll($where = ['status' => 1])
    {
        return $this->field('id,title')
            ->where($where)
            ->order('id desc')
            ->select();
    }

}