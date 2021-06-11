<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/14
 * Time: 14:32
 */
namespace app\purchase\model;

use think\Model;

class BaseModel extends Model{

    protected $autoWriteTimestamp = 'datetime';

    /**
     * 获取分页数据
     * @param array $where   条件
     * @param int $start     其实页
     * @param int $limit     每页显示数据
     * @param string $fields 查询字段
     * @param null $with     关联模型
     * @return string
     */
    public function getTableData($where = [], $page = 1, $limit = 10, $fields = '*', $with = null)
    {
        $result = $with ? $this->where($where)->with($with) : $this->where($where);
        $data = $result->field($fields);
        $count = $data->count();
        $data =  $data->order('id DESC')
            ->page($page, $limit)
            ->select();
        return outTableMsg(0, '查询成功', $count, $data);
    }
}