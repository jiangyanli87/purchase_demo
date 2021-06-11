<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/8
 * Time: 22:04
 */

use think\Db;

//目录分隔符
defined('DS') or define('DS', DIRECTORY_SEPARATOR);

/**
 * 创建流水号
 * @return int|mixed
 */
function createPurNum(){
    $pur_num= Db::name('pur_main')->order('pur_num desc')->value('pur_num');
    $type_str = 'PU';
    if (!$pur_num) return $type_str . '0001';
    $num = substr($pur_num, 1, strlen($pur_num));
    $num += 1;
    $newStr = sprintf('%04s', $num);
    return $type_str . $newStr;
}

/**
 * 生成新的材料编号
 * @return string
 */
function createMaterialNum()
{
    $m_id = Db::name('material')
        ->where('m_num', 'like', 'M%')
        ->order('m_num desc')
        ->value('m_num');
    $type_str = 'MA';
    if (!$m_id) return $type_str . '0001';
    $num = substr($m_id, 1, strlen($m_id));
    $num += 1;
    $newStr = sprintf('%04s', $num);
    return $type_str . $newStr;
}

/**
 * 检测传入数据
 * @param array $fields      必传字段$chack_empty
 * @param array $data        传入数据
 * @param bool  $chack_empty 开启检测传值是否为空
 * @return array|bool
 */
function checkData($fields = [], $data = [], $chack_empty = false)
{
    if (!empty($fields) && empty($data)) {
        return outMsg(11001, '参数为空');
    }
    $tem = [];
    $k = array_keys($data);
    foreach ($fields as $v) {
        //判断是否缺少请求参数
        if (!in_array($v, $k)) {
            return outMsg(11003, "缺少参数'{$v}'");
            break;
        }
        //请求参数，是否为空
        if($chack_empty && $data[$v] === ''){
            return outMsg(11004, "参数不能为空'{$v}'");
            break;
        }
        $tem[$v] = trim($data[$v]); //去除空字符
    }
    return $tem;
}


if (!function_exists('outEmptyDataMsg')){
    /**
     * 响应前端数据，返回json数据
     * @param $code
     * @param $msg
     * @return string
     */
    function outEmptyDataMsg($code, $msg) {
        header('Content-Type:application/json');
        $re = [
            'code' => $code,
            'msg' => $msg,
        ];
        echo json_encode($re, 320);
        die;
    }
}