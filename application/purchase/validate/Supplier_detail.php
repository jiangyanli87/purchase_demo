<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/5/13
 * Time: 11:43
 */
namespace app\purchase\validate;


use app\purchase\model\Supplier_info;

/**
 * 供应商验证器
 * Class SupplierValidate
 * @package app\purchase\validate
 */
class Supplier_detail extends BaseValidate {

    protected $rule = [
        's_id' => 'require|integer|min:1|isExist',
        'page|查询页数' => 'require|integer|min:1',
        'limit|查询条数' => 'require|integer|min:1',
        'type|查询类型' => 'require|integer'
    ];

    protected $scene = [
        'showList' => ['page', 'limit'],
        'showInfo' => ['s_id']
    ];

    protected function isExist($value, $rule, $data ){
        $isExist = (new Supplier_info())->get($value);
        if(!$isExist) return '供应商不存在';
        return true;
    }
}