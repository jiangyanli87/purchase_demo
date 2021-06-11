<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/20
 * Time: 15:07
 */
namespace app\purchase\validate;

use app\purchase\model\PurItem;

class PurItemValidate extends BaseValidate{

    protected $rule = [
        'pi_id' => 'require|integer|min:1|isExist',
        'page|查询页数' => 'require|integer|min:1',
        'limit|查询条数' => 'require|integer|min:1',
        'type|查询类型' => 'require|integer'
    ];

    protected $scene = [
        'showList' => ['page', 'limit', 'type'],
        'showInfo' => ['pi_id'],
        'showListByPmid' => ['pm_id'],
    ];

    protected function isExist($value, $rule, $data ){
        $isExist = (new PurItem())->get($value);
        if(!$isExist) return '采访需求不存在';
        return true;
    }
}