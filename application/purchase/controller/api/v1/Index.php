<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/15
 * Time: 22:16
 */
namespace app\purchase\controller\api\v1;

use app\purchase\controller\api\ApiBase;

class Index extends ApiBase{

    public function test(){
        var_dump(222);
        var_dump(request()->method());
        var_dump(request());
    }
}