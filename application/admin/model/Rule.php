<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 22:24
 */

namespace app\admin\model;

use think\Db;

class Rule extends Base
{

    protected $name = 'auth_rule';

    public function getIconAttr($value)
    {
        // return $value ?: 'xe696';
        return $value ?: '';
    }


    /**
     * 根据角色id集合获取角色
     * @param $id_arr
     * @param bool $type
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getRules($id_arr, $type = false)
    {
        $where = [
            'status' => 1,
            'id' => $id_arr
        ];
        if ($type) {
            unset($where['id']);
        }
        return $this->where($where)->order('sort ASC')->select()->toArray();
    }

    /**
     * 获取全部数据
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAll($where = ['status' => 1])
    {
        return $this->field('*')
            ->where($where)
            ->order('sort ASC')
            ->select();

    }

    /**
     * 预处理树形数据
     * @param $id_arr
     * @return array
     */
    public function getPrepData($id_arr)
    {
        $rule = $this->getAll();
        $tmp = [];
        foreach ($rule as $k => $v){
            $v = $v->toArray();
            if(in_array($v['id'],$id_arr)) {
                $v['checked'] = true;
                $v['spread'] = true;
            }
            $tmp[$k] = $v;
        }
        return  $tmp;
    }
}