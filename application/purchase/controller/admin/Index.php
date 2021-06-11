<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/8
 * Time: 11:35
 */
namespace app\purchase\controller\admin;
use app\purchase\model\PurItem;
use app\purchase\model\PurMain;
use app\purchase\model\SupplierPrice;
use app\purchase\validate\PurItemValidate;
use app\purchase\validate\PurMainValidate;
use app\purchase\validate\SupplierPriceValidate;
use think\Db;
use app\purchase\validate\MaterialValidate;
use app\purchase\model\Material as MaterialModel;

use app\purchase\validate\SupplierValidate;
use app\purchase\model\Supplier as SupplierModel;
class Index extends AdminBase{
    //编辑物料维护
    public function editRule()
    {
        $id= request()->param("id");
        $supplierinfo=Db::name("material")->where('id',$id)->find();
        if(request()->isPost())
        {
            $id= request()->param('id');
            $m_num=request()->param('m_num');
            $station_name=request()->param('station_name');
            $m_name=request()->param('m_name');
            $spec=request()->param('spec');
            $units=request()->param('units');
            // $conn_man=request()->param('conn_man');
            // $conn_phone=request()->param('conn_phone');
            $res=Db::name("material")->where("id",$id)->update(['m_num'=>$m_num,'station_name'=>$station_name,
            'm_name'=>$m_name,'spec'=>$spec,'units'=>$units
            ]);
            if($res!==false){
                return outMsg(0,'编辑成功');
            }else{
                return outMsg(1,'编辑失败');
            }
        }
        return $this->new_fetch();
    }
//编辑物料分类
public function editItem(){
    $id= request()->param("id");
    $supplierinfo=Db::name("material_category")->where('id',$id)->find();
    if(request()->isPost()){
        $id= request()->param('id');
            $c_name=request()->param('c_name'); 
            $res=Db::name("material_category")->where("id",$id)->update(['c_name'=>$c_name]);
            if($res!==false){
                return outMsg(0,'编辑成功');
            }else{
                return outMsg(1,'编辑失败');
            }
        }
        return $this->new_fetch();
    }
    //添加材料
    public function add_material(){
        if(request()->isPost()){
            $data=request()->post();
            $res=Db::name('material')->insert($data);
            if($res) return outMsg(0,'添加成功');
            return outMsg(1,'添加失败');
        }
        return $this->new_fetch();
    }
        //材料数据
        public function getMaterialData(){
            $params = request()->param();
            $page = $params['page'];
            $limit = $params['limit'];
            $where = array();
            if(isset($params['search_key']) && !empty($params['search_key']) && !empty($params['search_val'])) $where[] = [$params['search_key'],'like', '%' .trim($params['search_val']). '%'];
            $count = Db::name('material')
                ->where($where)
                ->select();
            $material = Db::name('material a')
                ->join('material_category b' , 'a.cid=b.id', 'left')
                ->field('a.*,b.c_name')
                ->where($where)
                ->limit(($page-1)*$limit, $limit)
                ->select();
            return outTableMsg(0, '', $count, $material);
        }
      //删除材料
      
      public function delRule()
      {
          $request =  $this->request;
          $id = $request->param('mid');
          $res=Db::name("material")->where('id',$id)->delete();
          if($res)
{
          return outMsg(0,'删除成功');
        }else{
            return outMsg(1,'删除失败');
        }
        //   $top_rule = [3,4,5,6];
        //   if(in_array($id, $top_rule)){
        //       return outMsg(1, '系统菜单无法删除');
        //   }
        //   $re = model('rule')->where('id', $id)->delete();
        //   if($re === false) return outMsg(1, '删除失败');
        //   return outMsg(0, '删除成功');
      }
    //采购需求列表
    public function need_list(){
        $search_info = [
            'car_num' => '采购单号',
            'car_plate' => '材料名称'
        ];
        return $this->new_fetch(['search_info' => $search_info]);
    }
    //选择报价确认
    public function choose_supp(){
        return $this->new_fetch();
    }
    //物料分类
    public function item_class(){
        $search_info = [
            'car_num' => '采购单号',
            'car_plate' => '材料名称'
        ];
        return $this->new_fetch(['search_info' => $search_info]);
    }

    //添加物料分类
    public function add_item(){
       if(request()->isPost()){
           $data=request()->post();
        $res=Db::name("material_category")->insert($data);
        if($res) return outMsg(0,"添加成功");
        return outMsg(1,'添加失败');
       };
      return $this->new_fetch();
    }


    //物料维护
    public function audit_need(){
        return $this->new_fetch(['search_info' => [
            'm_num' => '物料编码'
        ]]);
    }
//物料维护列表数据
public function listData(){
    (new MaterialValidate())->goCheck("showList");
    (new MaterialModel())->getListData();

}
        //物料维护编辑材料
        public function edit_material(){
            $params = request()->param();
            if(request()->isPost()){
                $is_exsit = Db::name('material')->where([['id', '<>', $params['mid']],['username','=', $params['username']],['station_name','=', $params['station_name']],['spec','=', $params['spec']]])->find();
                if($is_exsit) return outMsg(1, '材料已存在');
                $params['update_time'] = date('Y-m-d H:i:s');
                $mid = $params['mid'];
                unset($params['mid']);
                $params['m_num'] = createMaterialNum();
                $res = Db::name('material')
                    ->where('id', $mid)
                    ->update($params);
                if($res) return outMsg(0, '操作成功');
                return outMsg(1, '操作失败');
            }
            $edit_material = Db::name('material')
                ->where('id', $params['mid'])->find();
                $this->assign(['params'=>$params]);
            return $this->new_fetch(['edit_material' => $edit_material]);
            // return $this->new_fetch();
        }
    //编辑物料分类
    public function edit_item(){
        $params = request()->param();
        // if(request()->isPost()){
        $edit_item = Db::name('material_category')->where('id',$params['id'])->find();
            $this->assign(['params'=>$params]);
        return $this->new_fetch(['edit_item' => $edit_item]);
        
    // }
    // return $this->new_fetch();
}
    //删除需求
    public function del_need(){
        $p_id = request()->param('p_id');
        $need_info = model('pur_item')->get($p_id);
        if($need_info){
            $need_info->delete();
            return outMsg(0, '操作成功');
        }
        return outMsg(1, '操作失败');
    }


        //采购需求列表数据
        public function getNeedList(){
            $params = request()->param();
            $page = $params['page'];
            $limit = $params['limit'];
            $start = ($page - 1) * $limit;
            $where = [];
            if (isset($params['search_key'])) $where[] = [$params['search_key'], 'like', '%' . trim($params['search_val']) . '%'];
            $count = model('pur_main')->where($where)->where($where)->count();
            $data = model('pur_main')->limit($start, $limit)->order('id desc')->where($where)->select();
            foreach ($data as $k => $v) {
                if($v['cid'] ==0 ){
                    $v['c_name'] = '原材料';
                } else{
                    $v['c_name'] = Db::name('material_category')->where(['id' => $v['cid']])->value('c_name');
                }
                $data[$k] = $v;
            }
            return outTableMsg(0, '', $count, $data);
        }
    
    //展示材料信息
    public function show_mater()
    {
        $station = session('station');
        $cid = request()->param('cid');
        if($cid == 0){//生产原材料
            $data = Db::name('base_data')->field('type as m_name')->where([['type', '=', '货名'],['add_info','in', $station]])->select();
        }else{//其他材料
            $data = Db::name('material')->where([['cid','=', $cid],['station_name','in', $station]])->select();
        }
        return $this->new_fetch(['materials' => $data]);
    }

    //发布物料选择列表
    public function get_mater_list()
    {
        $param = request()->param();
        $page = $param['page'];
        $limit = $param['limit'];
        $cid = $param['cid'];
        $where = [];

        if($cid == 0){//生产原材料
            if(isset($param['m_name']) && !empty($param['m_name'])) $where[] = ['type', '=', $param['m_name']];
            if(isset($param['spec']) && !empty($param['spec'])) $where[] = ['name', '=', $param['spec']];
            $list = Db::name('wastage_cailiao')->field('*,code as m_num,type as m_name, name as spec')->where($where)->limit(($page - 1) * $limit, $limit)->select();
            $count = Db::name('wastage_cailiao')->where($where)->count();
        }else{//其他材料
            $where[] = ['cid', '=', $cid];
            if(isset($param['m_name']) && !empty($param['m_name'])) $where[] = ['m_name', '=', $param['m_name']];
            if(isset($param['spec']) && !empty($param['spec'])) $where[] = ['spec', '=', $param['spec']];
            $list = Db::name('material')->where($where)->limit(($page - 1) * $limit, $limit)->select();
            $count = Db::name('material')->where($where)->count();
        }
        return outTableMsg(0, '获取成功', $count, $list);
    }

    //发布采购需求
    public function add_purch(){
        $params = request()->param();
        $main_data = $params['main'];
        $main_data['pur_num'] = createPurNum();
        $item_data = $params['item'];
        $main_res = (new PurMain())->create($main_data);
        if($main_res){
            foreach ($item_data as $k => $v){
                $v['pm_id'] = $main_res['id'];
                $v['cid'] = $main_data['cid'];
                $item_data[$k] = $v;
            }
            //插入采购明细
            (new PurItem())->saveAll($item_data);
            return outMsg(0, '发布成功');
        }
        return outMsg(1, '发布失败');
    }

    //报价确认页面
    public function comfirm(){
        return $this->new_fetch();
    }

    //报价确认页面数据
    public function getComfirmData(){
        (new PurMainValidate())->goCheck('showList');
        $data = (new PurMain())->getMainList();
        return outMsg(0, '查询成功',$data);
    }

    //选择供应商报价页面
    public function show_supp_price(){
    //     (new PurItemValidate())->goCheck('showInfo');
    //     $info = (new PurItem())->getPurItemInfoById(); //采购需求详情
    //    dump ($info);
    //     return $this->new_fetch(['info' => $info]);
        return $this->new_fetch();
    }

    //获取供应商报价数据
    public function getSuppPriceData(){
        (new SupplierPriceValidate())->goCheck('choose');
        $data = (new SupplierPrice())->getSuppPriceDataByPID();
        return outTableMsg(0, '', count($data), $data);
    }
    //审核采购确认报价
    public function audit_comfirm(){
          return $this->new_fetch();
    }
  //报价管理 报价汇总
  public function quotation(){
    return $this->new_fetch();
}
  //报价管理 审核汇总
  public function for_checkings(){
    return $this->new_fetch();
}
  //报价管理 报价审核
  public function offer_review(){
    return $this->new_fetch();
}
    public function getPurList(){
        (new PurMainValidate())->goCheck('showList');
        $data = (new PurMain())->getMainList();
        return outMsg(0, '查询成功',$data);
    }

    //审核采购确认报价数据
    public function getAuditComfirmData(){
        (new PurItemValidate())->goCheck('showListByPmid');
        $data = (new PurItem())->getPurItemInfoByPmId();
        return outMsg(0, '查询成功',$data);
    }

        //采购明细
        public function pur_item(){
            $params = request()->param();
            $edit_material = Db::name('pur_main')
            ->where('id', $params['p_id'])->find();
            $this->assign(['params'=>$params]);
        return $this->new_fetch(['edit_material' => $edit_material]);
        }
    //添加供应商
    public function add_supp(){
        return $this->new_fetch();
    }
    //供应商绑定物料
    public function suppBindMater(){

    }

    //需求维护添加
    public function add_need(){

           if(request()->isPost()){
            $data=request()->post();
            $res=Db::name('supplier')->insert($data);
            if($res) return outMsg(0,'添加成功');
            return outMsg(1,'添加失败');
        }
        return $this->new_fetch();
    }
    //确认报价-消息记录
    public function offer_msg_record(){
        return $this->new_fetch(['search_info' => [
            'supp_name' => '供应商名称'
        ],'send_info'=>['conn_phone'=>"联系电话"]]);
    }

    //报价审核--报价记录
    public function quotation_record(){
        return $this->new_fetch();
    }
        //供应商列表数据
        public function listData1(){
            (new SupplierValidate())->goCheck('showList');
            (new SupplierModel())->getListData();
        }
        //开始审核
        public function go_check(){
            $this->assign('name','xiaoming');
            return $this->new_fetch();
        }
            //选择报价
            public function choose_quote(){
                $this->assign('name','xiaoming');
                return $this->new_fetch();
            }
  //取消资格
  public function cel_qualification(){
    $this->assign('name','xiaoming');
    return $this->new_fetch();
}
  //驳回报价
  public function reject(){
    $this->assign('name','xiaoming');
    return $this->new_fetch();
}
  //历史报价
  public function history_quote(){
    $this->assign('name','xiaoming');
    return $this->new_fetch();
}
}