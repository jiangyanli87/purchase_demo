<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/19
 * Time: 15:02
 */

Route::group('p_api/:version/', [
    'index/test' => 'purchase/api.:version.index/test',  //测试

    'user/login' => 'purchase/api.:version.user/login',  //用户登录
    'user/logOut' => 'purchase/api.:version.user/logOut', //用户退出登录
    'user/editPass' => 'purchase/api.:version.user/editPass', //编辑密码

    'purchase/p_list' => 'purchase/api.:version.purchase/p_list', //报价列表
    'purchase/subPrice' => 'purchase/api.:version.purchase/subPrice', //采购报价
]);
