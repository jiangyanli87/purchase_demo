<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2019/11/5
 * Time: 22:27
 */
namespace app\admin\model;
use think\Model;

class Base extends Model{

    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'create_time';
    protected $updateTime = false;

    /**
     * 获取分页数据
     * @param array $where   条件
     * @param int $start     其实页
     * @param int $limit     每页显示数据
     * @param string $fields 查询字段
     * @param null $with     关联模型
     * @return string
     */
    public function getTableData($where = [], $start = 1, $limit = 10, $fields = '*', $with = null)
    {
        //排除删除角色
        $where[] = ['status', 'neq', 9];
        $count = $this->where($where)
            ->field('id')
            ->order('id DESC')
            ->count();
        $result = $with ? $this->where($where)->with($with) : $this->where($where);
        $data = $result->field($fields)
            ->order('id DESC')
            ->limit($start, $limit)
            ->select();
        return outTableMsg(0, '查询成功', $count, $data);
    }
}