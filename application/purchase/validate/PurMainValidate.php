<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/5/7
 * Time: 10:38
 */
namespace app\purchase\validate;

use app\purchase\model\PurItem;
use app\purchase\model\PurMain;

class PurMainValidate extends BaseValidate{

    protected $rule = [
        'pi_id' => 'require|integer|min:1|isExist',
        'page|查询页数' => 'require|integer|min:1',
        'limit|查询条数' => 'require|integer|min:1',
        'type|查询类型' => 'require|integer'
    ];

    protected $scene = [
        'showList' => ['page', 'limit', 'type'],
        'showInfo' => ['pi_id'],
    ];

    protected function isExist($value, $rule, $data ){
        $isExist = (new PurMain())->get($value);
        if(!$isExist) return '采访需求不存在';
        return true;
    }
}