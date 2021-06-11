<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/14
 * Time: 14:41
 */
namespace app\purchase\model;

use think\Db;

class PurItem extends BaseModel
{
    const SUPP_NOTBJ_STATUS = 0;  //供应商未报价
    const SUPP_BJ_STATUS = 1;  //供应商已报价

    //确认状态 start
    const NOT_COMFIRM = 0; //未确认
    const COMFIRM_SUCC = 1; //已确认
    const COMFIRM_CANCEL = 2; //已取消
    //确认状态 end

    //审核状态 start
    const NOT_AUDIT = 0; //未审核
    const AUDIT_SUCC = 1; //审核通过
    const AUDIT_FAIL = 2; //审核未通过
    //审核状态 end
    //关联采购需求主表
    public function main()
    {
        return $this->belongsTo('pur_main', 'pm_id')->setEagerlyType(0);
    }

    //关联供应商报价
    public function suppPrice()
    {
        return $this->hasMany('supplier_price', 'pi_id');
    }

    //关联供应商报价
    public function selPrice()
    {
        return $this->hasMany('supplier_price', 'pi_id')
            ->where('choose_status', SupplierPrice::CHOOSE_SUCC);
    }

    /**
     * 获取供应商报价列表
     * @param $uid
     * @param $type
     * @param int $page
     * @param int $limit
     * @return string
     */
    public function getSuppData()
    {
        $param = request()->param();
        $page = $param['page'];
        $limit = $param['limit'];
        $type = $param['type'];
        $uid = request()->userInfo['id'];
        switch ($type) {
            case self::SUPP_NOTBJ_STATUS: //未报价
                $this->getSuppNotBJData($uid, $page, $limit);
                break;
            case self::SUPP_BJ_STATUS: //已报价
                $this->getSuppBJData($uid, $page, $limit);
                break;
            default:
                return outEmptyDataMsg(12001, '查询状态错误');
                break;
        }
    }

    /**
     * 获取用户未报价数据
     * @param $uid
     * @param int $page
     * @param int $limit
     * @return string
     */
    public function getSuppNotBJData($uid, $page = 1, $limit = 10)
    {
        $map1 = $map2 = $data = array();
        $m_m_spec = (new User())->getSuppMnameAndSpec($uid);
        if ($m_m_spec) {
            $m_name = $m_m_spec['m_name'];
            $m_spec = $m_m_spec['spec'];
            foreach ($m_name as $k1 => $v1) {
                $map1[] = [['m_name', '=', $v1['m_name']], ['psp.id', '=', Null], ['end_status', '=', 0], ['expir_time', '>', date('Y-m-d H:i:s')]];
            }
            foreach ($m_spec as $k2 => $v2) {
                $map2[] = [
                    ['m_name', '=', $v2['m_name']],
                    ['spec', '=', $v2['spec']],
                    ['psp.id', '=', Null],
                    ['end_status', '=', 0],
                    ['expir_time', '>', date('Y-m-d H:i:s')]
                ];
            }
            $data = Db::name('pur_item pi')
                ->join('pur_main pm', 'pi.pm_id=pm.id')
                ->join('pur_supp_price psp', 'psp.pi_id=pi.id', 'left')
                ->field('pi.*,pm.*,pi.id as pi_id,pm.id as pm_id,psp.audit_status as audit_status')
                ->whereOr($map1)
                ->whereOr($map2)
                ->order('pi.id asc')
                ->page($page, $limit)
                ->select();
        }
        return outMsg(200, '查询成功', $data);
    }

    /**
     * 获取用户未报价数据
     * @param $uid
     * @param int $page
     * @param int $limit
     * @return string
     */
    public function getSuppBJData($uid, $page = 1, $limit = 10)
    {
        $map1 = $map2 = $data = array();
        $m_m_spec = (new User())->getSuppMnameAndSpec($uid);
        if ($m_m_spec) {
            $m_name = $m_m_spec['m_name'];
            $m_spec = $m_m_spec['spec'];
            foreach ($m_name as $k1 => $v1) {
                $map1[] = [['m_name', '=', $v1['m_name']]];
            }
            foreach ($m_spec as $k2 => $v2) {
                $map2[] = [
                    ['m_name', '=', $v2['m_name']],
                    ['spec', '=', $v2['spec']],
                ];
            }
            $data = Db::name('pur_item pi')
                ->join('pur_main pm', 'pi.pm_id=pm.id')
                ->join('pur_supp_price psp', 'psp.pi_id=pi.id')
                ->field('pi.*,pm.*,psp.*,pi.id as pi_id,pm.id as pm_id,psp.num as s_num,psp.remark as s_remark,psp.audit_status as audit_status')
                ->whereOr($map1)
                ->whereOr($map2)
                ->order('pi.id asc')
                ->page($page, $limit)
                ->select();
        }
        return outMsg(200, '查询成功', $data);
    }

    //根据状态获取采购订单
    public function getPurList()
    {
        $params = request()->param();
        $where = [];
        if (isset($params['pur_num']) && !empty($params['pur_num'])) $where[] = ['main.pur_num', '=', $params['pur_num']];
        $data = $this->getStatusCondition($params['type'])->with(['main'])->where($where);
        $count = $data->count();
        $data = $data->page($params['page'], $params['limit'])->select();
        return ['count' => $count, 'data' => $data];
    }

    //获取查询状态条件
    protected function getStatusCondition($status)
    {
        $obj = null;
        switch ($status) {
            case 0: //未确认
                return $this->where('comfirm_status', self::NOT_COMFIRM);
                break;
            case 1: //已确认
                return $this->where('comfirm_status', self::COMFIRM_SUCC);
                break;
            case 2: //已取消
                return $this->where('comfirm_status', self::COMFIRM_CANCEL);
                break;
            case 3: //未审核
                return $this->where([['comfirm_status', '=', self::COMFIRM_SUCC], ['pur_item.audit_status', '=', self::NOT_AUDIT]]);
                break;
            case 4: //审核通过
                return $this->where([['comfirm_status', '=', self::COMFIRM_SUCC], ['pur_item.audit_status', '=', self::AUDIT_SUCC]]);
                break;
            case 5: //审核不通过
                return $this->where([['comfirm_status', '=', self::COMFIRM_SUCC], ['pur_item.audit_status', '=', self::AUDIT_FAIL]]);
                break;
            default:
                return outEmptyDataMsg(12001, '查询状态错误');
                break;
        }
    }

    //通过id获取
    public function getPurItemInfoById()
    {
        $param = request()->param();
        $data = $this->with(['main', 'selPrice'])->get($param['pi_id'])->toArray();
        $data['sel_count']['choose_supp_count'] = !empty($data['sel_price']) ? count($data['sel_price']) : 0;
        $data['sel_count']['choose_num_count'] = !empty($data['sel_price']) ? array_sum(array_column($data['sel_price'], 'choose_num')) : 0;
        return $data;
    }

    //通过主采购信息获取采购明细
    public function getPurItemInfoByPmId()
    {
        $param = request()->param();
        $data = $this->with(['main', 'selPrice' => function($query){
                return $query->with(['supplier']);
            }])
            ->where('pm_id', $param['pm_id'])
            ->select()->toArray();
//        $data['sel_count']['choose_supp_count'] = !empty($data['sel_price']) ? count($data['sel_price']) : 0;
//        $data['sel_count']['choose_num_count'] = !empty($data['sel_price']) ? array_sum(array_column($data['sel_price'], 'choose_num')) : 0;
        return $data;
    }

}