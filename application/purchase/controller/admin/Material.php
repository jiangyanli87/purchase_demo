<?php
/**
 * Created by PhpStorm.
 * User: 邢旭
 * Date: 2021/4/9
 * Time: 10:48
 */
namespace app\purchase\controller\admin;

use think\Db;

class Material extends AdminBase{


    //合同列表
    public function category(){
        $search_info = [
            'c_name' => '类别名称',
        ];
        return $this->new_fetch(['search_info' => $search_info]);
    }
    //供货记录
    public function delivery_record(){
        $search_info = [
            'c_name' => '类别名称',
        ];
        return $this->new_fetch(['search_info' => $search_info]);
    }

    //分类数据
    public function getCateData(){
        $params = request()->param();
        $where = array();
        if(isset($params['search_key']) && !empty($params['search_key']) && !empty($params['search_val'])) $where[] = [$params['search_key'],'like', '%' .trim($params['search_val']). '%'];
        $cates = Db::name('material_category')
            ->where($where)
            ->select();
        return outTableMsg(0, '', count($cates), $cates);
    }

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

    //添加分类
    public function add_category(){
        $param = request()->param();
        if(request()->isPost()){
            $c_name = $param['c_name'];
            $station_name = $param['station_name'];
            $is_exist = Db::name('material_category')
                ->where([['c_name','=', $c_name],['station_name','=', $station_name]])
                ->find();
            if($is_exist || $c_name == '原材料') return outMsg(1, '名称已存在');
            $time = date('Y-m-d H:i:s');
            $res = Db::name('material_category')
                ->insert([
                    'c_name' => $c_name,
                    'create_time' => $time,
                    'update_time' => $time,
                    'station_name' => $station_name
                ]);
            if($res)return outMsg(0, '操作成功');
            return outMsg(1, '操作失败');
        }
        return $this->new_fetch();
    }

    //编辑分类
    // public function edit_category(){
    //     $param = request()->param();
    //     if(request()->isPost()){
    //         $c_name = $param['c_name'];
    //         $station_name = $param['station_name'];
    //         $is_exist = Db::name('material_category')
    //             ->where([['id', '<>', $param['cid']],['c_name','=', $c_name],['station_name','=', $station_name]])
    //             ->find();
    //         if($is_exist || $c_name == '原材料') return outMsg(1, '名称已存在');
    //         $time = date('Y-m-d H:i:s');
    //         $res = Db::name('material_category')
    //             ->where('id', $param['cid'])
    //             ->update([
    //                 'c_name' => $c_name,
    //                 'update_time' => $time,
    //                 'station_name' => $station_name
    //             ]);
    //         if($res)return outMsg(0, '操作成功');
    //         return outMsg(1, '操作失败');
    //     }
    //     $cate = Db::name('material_category')->where('id', $param['cid'])->find();
    //     return $this->new_fetch(['cate' => $cate]);
    // }
    public function edit_category(){
        $params = request()->param();
            $edit_material = Db::name('pur_main')
            ->where('id', $params['cid'])->find();
            $this->assign(['params'=>$params]);
        return $this->new_fetch(['edit_material' => $edit_material]);
    }

    //删除分类
    public function del_category(){
        $param = request()->param();
        $is_exsitMater =  Db::name('material')
            ->where('cid', $param['cid'])
            ->find();
        if($is_exsitMater) outMsg(1, '大类存在物料，请先删除物料');
        $res = Db::name('material_category')
            ->where('id', $param['cid'])
            ->delete();
        if($res)return outMsg(0, '操作成功');
        return outMsg(1, '操作失败');
    }

    //材料维护
    public function material(){
        $search_info = [
            'm_name' => '材料名称',
            'spec' => '材料规格'
        ];
        return $this->new_fetch(['search_info' => $search_info]);
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

    //编辑材料
    public function edit_material(){
        $params = request()->param();
        if(request()->isPost()){
            $is_exsit = Db::name('material')->where([['id', '<>', $params['mid']],['m_name','=', $params['m_name']],['station_name','=', $params['station_name']],['spec','=', $params['spec']]])->find();
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
        $material = Db::name('material')
            ->where('id', $params['mid'])->find();
        return $this->new_fetch(['material' => $material]);
    }

    //删除材料
    public function del_material(){
        $mid = request()->param('mid');
        $res = Db::name('material')
            ->where('id', $mid)
            ->delete();
        if($res) return outMsg(0, '操作成功');
        return outMsg(1, '操作失败');
    }

}