<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/5/13
 * Time: 11:42
 */
namespace app\purchase\model;

class Material extends BaseModel{

    //供应商列表数据
    public function getListData(){
        $params = request()->param();
        $where = [];
        if(isset($params['search_key'])){
            $where[] = [$params['search_key'],'like','%'.$params['search_val'].'%'];
        }
        return $this->getTableData($where, $params['page'], $params['limit']);
    }
}