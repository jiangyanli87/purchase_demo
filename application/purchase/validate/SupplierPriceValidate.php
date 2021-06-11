<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/20
 * Time: 10:29
 */
namespace app\purchase\validate;


use app\purchase\model\SupplierPrice;

/**
 * 供应商报价验证器
 * Class SupplierPriceValidate
 * @package app\purchase\validate
 */
class SupplierPriceValidate extends BaseValidate {

    protected $rule = [
        'pm_id|采购主信息id' => 'require|integer|min:1',
        'pi_id|采购信息id' => 'require|integer|min:1',
        's_id|供应商id' => 'require|integer|min:1',
        'promise_time|承诺供货时间' =>'require|date',
        'prod_place|产地' => 'require',
        'num|数量' => 'require|float|isBj',
        'price|价格' => 'require|float|isBj',
        'remark|备注' => 'max:100'

    ];


    protected $scene = [
        'add' => ['pm_id','pi_id','promise_time','num', 'price', 'prod_place', 'remark'],
        'choose' => ['pi_id']
    ];

    //判读是否重复报价
    protected function isBj($value, $rule, $data){
        $isExist = (new SupplierPrice())->get([
            's_id' =>$data['userInfo']['id'],
            'choose_status' => [0,1,2],
            'pi_id' => $data['pi_id']
        ]);
        if($isExist) return '供应商已报价';
        return true;
    }

}