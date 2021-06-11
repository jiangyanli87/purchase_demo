<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/16
 * Time: 22:52
 */
namespace app\purchase\model;

class SupplierPrice extends BaseModel{

    protected  $name = 'pur_supp_price';

    protected $createTime = 'create_time';
    protected $update_time = 'update_time';

    //报价选中状态 start
    const NOT_CHOOSE = 0; //未选择
    const CHOOSE_SUCC = 1; //选择通过
    const CHOOSE_FAIL = 2; //选择未通过
    const CHOOSE_CENCEL = 3; //退回
    //报价选中状态 end

    //报价审核状态 start
    const NOT_AUDIT = 0; //未选择
    const AUDIT_SUCC = 1; //选择通过
    const AUDIT_FAIL = 2; //选择未通过
    const AUDIT_CENCEL = 3; //退回
    //报价审核状态 end

    //审核状态
    protected function getAuditStatusAttr($value){
        $text = '';
        //0：未审核，1：已审核，2：未通过
        switch ($value) {
            case 0:
                $text = '未审核';
                break;
            case 1:
                $text = '已审核';
                break;
            case 2:
                $text = '未通过';
                break;
        }
        return ['value' => $value, 'text' => $text];
    }

    //关联采购需求信息明细表
    public function pitem()
    {
        return $this->belongsTo('pur_item', 'pi_id')->setEagerlyType(0);
    }

    //关联采购需求信息主表
    public function pmain(){
        return $this->belongsTo('pur_main', 'pm_id')->setEagerlyType(0);
    }

    //关联供应商信息
    public function supplier(){
        return $this->hasOne('supplier', 'id', 's_id')->setEagerlyType(0);
    }

    public function setBjnumAttr($value){

    }

    //添加供应商报价
    public function addSuppPrice(){
        $params = request()->param();
        $params['s_id'] = request()->userInfo['id'];
        $res = $this->save($params);
        if($res) return outEmptyDataMsg(200, '报价成功');
        return outEmptyDataMsg(13001, '报价失败');
    }

    //通过采购明细id获取供应商报价id
    public function getSuppPriceDataByPID(){
        $pi_id = request()->param('pi_id');
        $where = [
            ['pi_id', '=', $pi_id]
        ];
        $data =  $this->with(['pmain', 'pitem','supplier'])
            ->where($where)
            ->group('s_id')
            ->order('id DESC')
            ->select();
        return $data->toArray();
    }

}