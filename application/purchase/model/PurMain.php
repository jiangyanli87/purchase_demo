<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/14
 * Time: 14:31
 */
namespace app\purchase\model;

class PurMain extends BaseModel {

    //审核状态 start
    const NOT_AUDIT = 0; //未审核
    const AUDIT_SUCC = 1; //审核通过
    const AUDIT_FAIL = 2; //审核未通过
    //审核状态 end


    //报价确认状态 start
    const NOT_COMFIRM = 0; //未确认
    const COMFIRM_SUCC = 1; //已确认
//    const AUDIT_PRICE_SUCC = 2; //报价审核通过
//    const AUDIT_PRICE_FAIL = 3; //报价审核未通过
    //报价确认状态 end

    //报价审核状态 start
    const NOT_AUDIT_PRICE = 0; //未结束
    const AUDIT_PRICE_SUCC = 1; //已结束
    const AUDIT_PRICE_FAIL = 2; //已结束
    //报价审核状态 end

    //结束状态 start
    const NOT_FINISH = 0; //未结束
    const FINISH = 1; //已结束
    //结束状态 end

    public function item(){
        return $this->hasMany('pur_item', 'pm_id', 'id');
    }

    //获取审核状态
    protected function getAuditStatusAttr($value,$duty)
    {
        $text = $s_text = '';
        $handle=$s_handle='';
        //0：未审核，1：已审核，2：未通过
        //0：未审核，1：已审核，2：未通过
        
        switch ($value) {
            case 0:
                $text = '未审核';
                $s_text = '<span style="color:#F37108">未审核</span>';
                $s_handle = '<span style="color:#F37108">未选择</span>';
                break;
            case 1:
                $text = '已审核';
                $s_text = '<span style="color:#17AE10">已通过</span>';
                $s_handle = '<span style="color:#17AE10">已选中</span>';
                break;
            case 2:
                $text = '未通过';
                $s_text = '<span style="color:#F30808">未通过</span>';
                $s_handle = '<span style="color:#F30808">未选中</span>';

                break;
        }
        return ['value' => $value, 'text' => $text,'handle' => $handle,'s_handle' => $s_handle,  's_text' => $s_text];
    }

    //获取报价确认状态
    protected function getPriceStatusAttr($value)
    {
        $text = $s_text = '';
        //0：未审核，1：已审核，2：未通过
        switch ($value) {
            case 0:
                $text = '未确认';
                $s_text = '<span style="color:#F37108">未审核</span>';
                break;
            case 1:
                $text = '已确认';
                $s_text = '<span style="color:#17AE10">已审核</span>';
                break;
            case 2:
                $text = '报价审核通过';
                $s_text = '<span style="color:#28b0e6">报价审核通过</span>';
                break;
            case 3:
                $text = '报价审核未通过';
                $s_text='<span style="color:#ff0000">报价审核通过</span>';
                break;
        }
        return ['value' => $value, 'text' => $s_text];
    }

    //获取报价审核状态
    protected function getAuditPriceAttr(){
  
    }
    //采购需求列表
    public function getMainList(){
        $params = request()->param();
        $where = array();
        $data = $this->getStatusCondition($params['type'])->with(['item'])->where($where);
        $count = $data->count();
        $data = $data->page($params['page'], $params['limit'])->select()->toArray();
        return ['count' => $count, 'data' => $data];
    }

    //获取查询状态条件
    protected function getStatusCondition($status)
    {
        $obj = null;
        switch ($status) {
            case 0: //未审核
                return $this->where([['audit_status','=', self::NOT_AUDIT]]);
                break;
            case 1: //审核通过
                return $this->where([['audit_status', '=',self::AUDIT_SUCC]]);
                break;
            case 2: //审核未通过
                return $this->where([['audit_status', '=',self::AUDIT_FAIL]]);
                break;
            case 3: //报价未确认
                return $this->where([['audit_status', '=', self::AUDIT_SUCC], ['price_status', '=', self::NOT_COMFIRM]]);
                break;
            case 4: //报价已确认
                return $this->where([['audit_status', '=', self::AUDIT_SUCC], ['price_status', '=', self::COMFIRM_SUCC]]);
                break;
            case 5: //报价未审核
                return $this->where([['audit_status', '=',self::AUDIT_SUCC],['price_status', '=', self::COMFIRM_SUCC], ['audit_price', '=', self::NOT_AUDIT_PRICE]]);
                break;
            case 6: //报价审核通过
                return $this->where([['audit_status', '=',self::AUDIT_SUCC],['price_status', '=', self::COMFIRM_SUCC], ['audit_price', '=', self::AUDIT_PRICE_SUCC]]);
                break;
            case 7: //报价审核未通过
                return $this->where([['audit_status', '=',self::AUDIT_SUCC],['price_status', '=', self::COMFIRM_SUCC], ['audit_price', '=', self::AUDIT_PRICE_FAIL]]);
                break;
            case 8: //未结束
                return $this->where([['finish_status', '=', self::NOT_FINISH]]);
                break;
            case 9: //结束
                return $this->where([['finish_status', '=', self::FINISH]]);
                break;
            default:
                return outEmptyDataMsg(12001, '查询状态错误');
                break;
        }
    }
}