<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/5/13
 * Time: 11:17
 */
namespace app\purchase\controller\admin;

use app\purchase\validate\SupplierValidate;
use app\purchase\model\Supplier as SupplierModel;

use app\purchase\validate\Supplier_detail;
use app\purchase\model\Supplier_info as Supplier_info_Model;
use think\Db;
class Supplier extends AdminBase{

    //供应商列表
    public function s_list(){
        return $this->new_fetch(['search_info' => [
            'username' => '登录账号'
        ]]);
    }

    //供应商列表数据
    public function listData(){
        (new SupplierValidate())->goCheck('showList');
        (new SupplierModel())->getListData();
    }
       //供货明细列表数据
       public function supplier_detail_listData(){
        (new Supplier_detail())->goCheck('showList');
        (new Supplier_info_Model())->getListData();
    }

          //删除材料
          public function delRule()
          {
              $request =  $this->request;
              $id = $request->param('mid');
              $res=Db::name("supplier")->where('id',$id)->delete();
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
     //添加材料
     public function add_material(){
        $params = request()->param();
        if(request()->isPost()){
            $is_exsit = Db::name('material')->where([['m_name','=', $params['m_name']],['station_name','=', $params['station_name']],['spec','=', $params['spec']]])->find();
            if($is_exsit) return outMsg(1, '材料已存在');
            $params['create_time'] = $params['update_time'] = date('Y-m-d H:i:s');
            $params['m_num'] = createMaterialNum();
            $res = Db::name('material')
                ->insert($params);
            if($res) return outMsg(0, '操作成功');
            return outMsg(1, '操作失败');
        }
        return $this->new_fetch();
    }
        //供应商编辑材料
        public function edit_material(){
            $params = request()->param();
            if(request()->isPost()){
                $is_exsit = Db::name('supplier')->where([['id', '<>', $params['mid']],['username','=', $params['username']],['station_name','=', $params['station_name']],['spec','=', $params['spec']]])->find();
                if($is_exsit) return outMsg(1, '材料已存在');
                $params['update_time'] = date('Y-m-d H:i:s');
                $mid = $params['mid'];
                unset($params['mid']);
                $params['m_num'] = createMaterialNum();
                $res = Db::name('supplier')
                    ->where('id', $mid)
                    ->update($params);
                if($res) return outMsg(0, '操作成功');
                return outMsg(1, '操作失败');
            }
            $edit_material = Db::name('supplier')
                ->where('id', $params['mid'])->find();
                $this->assign(['params'=>$params]);
            return $this->new_fetch(['edit_material' => $edit_material]);
            // return $this->new_fetch();
        }

    //编辑供应商信息维护
    public function editRule()
    {
        $id= request()->param("id");
        $supplierinfo=Db::name("supplier")->where('id',$id)->find();
        if(request()->isPost())
        {
            $id= request()->param('id');
            $username=request()->param('username');
            $password=request()->param('password');
            $supp_name=request()->param('supp_name');
            $openid=request()->param('openid');
            $remark=request()->param('remark');
            $conn_man=request()->param('conn_man');
            $conn_phone=request()->param('conn_phone');
            $res=Db::name("supplier")->where("id",$id)->update(['username'=>$username,'password'=>$password,
            'supp_name'=>$supp_name,'openid'=>$openid,'remark'=>$remark,'conn_man'=>$conn_man,'conn_phone'=>$conn_phone,
            ]);
            if($res!==false){
                return outMsg(0,'编辑成功');
            }else{
                return outMsg(1,'编辑失败');
            }
        }
        return $this->new_fetch();
    }
            //添加供应商信息维护
    public function addRule()
    {
        if(request()->isPost()){
            $data=request()->post();
            $res=Db::name('supplier')->insert($data);
            if($res) return outMsg(0,'添加成功');
            return outMsg(1,'添加失败');
        }
        return $this->new_fetch();
//         $request = $this->request;
//         if($request->isPost()){
//             $post = $request->post();
//             $result = $this->validate($post,'app\admin\validate\Rule.add');
//             if(true !== $result){
//                 // 验证失败 输出错误信息
//                 return outMsg(1, $result);
//             }
//             $post['status'] = $post['status'] == 1 ?1:2;
//             $role = model('rule');
//             $re = $role->allowField(true)->save($post);
//             if($re !== false)
//             return outMsg(0, '添加成功');
//             return outMsg(1, '添加失败');
//         }
//         $where[] = ['status', 'neq', 9];
//         $rules = model('rule')->getAll($where);
// //        $pid = isset($params['pid'])?$params['pid']:0;
//         $rules = array2level($rules);
//         $this->assign(['rules' => $rules]);
//         return $this->fetch();
    }


// 供应商信息管理维护 供货绑定
    public function binding(){
        $params = request()->param();
        if(request()->isPost()){
            $is_exsit = Db::name('supplier')->where([['id', '<>', $params['mid']],['username','=', $params['username']],['station_name','=', $params['station_name']],['spec','=', $params['spec']]])->find();
            if($is_exsit) return outMsg(1, '材料已存在');
            $params['update_time'] = date('Y-m-d H:i:s');
            $mid = $params['mid'];
            unset($params['mid']);
            $params['m_num'] = createMaterialNum();
            $res = Db::name('supplier')
                ->where('id', $mid)
                ->update($params);
            if($res) return outMsg(0, '操作成功');
            return outMsg(1, '操作失败');
        }
        $binding = Db::name('supplier')
        ->where('id', $params['mid'])->find();
        $this->assign(['params'=>$params]);
    return $this->new_fetch(['binding' => $binding]);
    }
//供应商信息管理维护 供货明细
public function supplier_detail(){
    return $this->new_fetch(['search_info' => [
        'ht_num' => '物料编码'
    ]]);
    // $this->assign('name','xiaoming');
    // return $this->new_fetch();
}

//删除供货详细材料
      
public function del_supplier_detail()
{
    $request =  $this->request;
    $id = $request->param('mid');
    $res=Db::name("supplier_info")->where('id',$id)->delete();
    if($res)
{
    return outMsg(0,'删除成功');
  }else{
      return outMsg(1,'删除失败');
  }
//   return $this->new_fetch();
}
 
}