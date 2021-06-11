<?php
namespace app\purchase\validate;


use app\purchase\model\Material;

/**
 * 供应商验证器
 * Class SupplierValidate
 * @package app\purchase\validate
 */
class MaterialValidate extends BaseValidate {

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
        $isExist = (new Material())->get($value);
        if(!$isExist) return '供应商不存在';
        return true;
    }
}