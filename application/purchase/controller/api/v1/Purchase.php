<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/16
 * Time: 16:52
 */
namespace app\purchase\controller\api\v1;

use app\purchase\controller\api\ApiBase;
use app\purchase\model\PurItem;
use app\purchase\model\SupplierInfo;
use app\purchase\model\SupplierPrice;
use app\purchase\model\User;
use app\purchase\validate\PurItemValidate;
use app\purchase\validate\SupplierPriceValidate;

class Purchase extends ApiBase {

    //采购需求列表
    public function p_list(){
        (new PurItemValidate())->goCheck('show');
        (new PurItem())->getSuppData();
    }

    //提交报价
    public function subPrice(){
        (new SupplierPriceValidate())->goCheck('add', 'post');
        (new SupplierPrice())->addSuppPrice();
    }
}