<?php /*a:4:{s:73:"E:\TP5.0\purchase\application\purchase\view\material\delivery_record.html";i:1623233225;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title id="title1">洋河新材料管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/public/static/purchase/css/font.css">
    <link rel="stylesheet" href="/public/static/purchase/css/xadmin.css">
    <link rel="stylesheet" href="/public/static/purchase/css/theme1.css">
	<!-- <link rel="stylesheet" href="/public/static/purchase/css/supplier.css"> -->
    <link rel="stylesheet" href="/public/static/purchase/css/formSelects-v4.css">
	<link rel="stylesheet" href="/public/static/layui-v2.6.6/layui/css/layui.css">
    <link rel="stylesheet" href="/public/static/iconfont/iconfont.css">
    <script src="/public/static/purchase/js/jquery.min.js" charset="utf-8"></script>
    <script src="/public/static/purchase//lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/public/static/purchase/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.layui-btn{
			background-color: #086DF3;
			color: #ffffff;
		}
		.layui-form-onswitch{
			background-color: #086DF3;
			border-color: #086DF3;
		}
		.layui-laypage .layui-laypage-curr .layui-laypage-em{
			background-color: #086DF3;
		}
		.layui-form-radio>i:hover, .layui-form-radioed>i {
			color: #086DF3;
		}
		.layui-form-checked[lay-skin=primary] i{
			background-color: rgba(47,145,252,1);
			border-color: rgba(47,145,252,1);
		}
		.layui-form-checkbox[lay-skin=primary] i:hover{
			border-color: rgba(47,145,252,1);
		}
		
		input.layui-input:focus{
			border-color:  #086DF3 !important;
		}
		.layui-form-select dl dd.layui-this{
			background-color:  #086DF3;
		}
		.layui-form-item .layui-input-inline {
			margin-right: 15px;
		}
		.item{
			margin-bottom: 5px;
		}
		a{
			color: #086DF3;
			cursor: pointer;
		}
        .layui-table-cell{
            font-size: 13px !important;
        }
	</style>
    <script>
        // 是否开启刷新记忆tab功能
        var is_remember = false;

        var station = '<?php echo cookie("station"); ?>'
        if(station == '华益站'){
            $('#title1').html('华益混凝土管理系统')
        }

    </script>
    <style type="text/css">
        body{
            background: #ffffff;
        }
    </style>
</head>
<link rel="stylesheet" href="/public/static/purchase/css/tableBase.css">
<style type="text/css">
    tr a{
        height: 25px !important;
        line-height: 25px !important;
        padding: 0 8px!important;
    }
    .item{
        margin-right: 15px !important;
    }
    .item label{
        display: inline-block;
        width: 80px !important;
        text-align: right;
    }
    .d-dr,
    .d-dr-jsb,
    .d-dr-jc,
    .d-dr-jsa,
    .d-dc,
    .d-dc-jc,
    .d-dc-jsb,
    .d-dc-jsa {
        display: flex;
    }
    .d-dr,
    .d-dr-jc,
    .d-dr-jsb,
    .d-dr-jsa,
    .d-dr-jcac
    {
        flex-direction: row;
    }
    .d-dr-ac,
    .d-dr-jcac,
    .d-dc-ac,
    .d-dc-jcac {
        display: flex;
        align-items: center;
    }

    .d-dr-jcac,
    .d-dr-jc,
    .d-dc-jc,
    .d-dc-jcac {
        justify-content: center;
    }

    .d-dc-jcac,
    .d-dc-jc,
    .d-dc-ac,
    .d-dc,
    .d-dc-jsb,
    .d-dc-jsa{
        flex-direction: column;
    }

    .d-dr-jsa ,
    .d-dc-jsa{
        justify-content: space-around;
    }

    .d-dr-jsb,
    .d-dc-jsb{
        justify-content: space-between;
    }

    .aic{
        align-items: center;
      
    }

    .d-f1 {
        flex: 1;
    }

</style>
<body>
<div class="x-body">
    
<div class="layui-breadcrumb bread" style=" margin-top: 15px;margin-bottom: 13px;" >
    <!-- <div class="layui-breadcrumb "  > -->
    <span style="font-size: 18px;">当前位置: &nbsp;</span>
    <a href="<?php echo url('admin/index/home'); ?>">首页</a> 
    <a href="#">采购合同管理</a>
    <!-- <a href="">亚太地区</a> -->
    <a><cite>供货记录</cite></a>
</div>

    
<form class="layui-form" action="#">
    <div class="item" style="margin-left: -41px;">
        <label >供应商 </label>
        <div class="layui-input-inline" style="margin-left: 10px;">
            <div class="layui-input-inline">
                <input type="text" name="search_val" id="search_val" placeholder="供应商名称" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
    </div>
    <div class="item" style="margin-left: -30px;">
        <label>车号</label>
        <div class="layui-input-inline">
            <div class="layui-input-inline">
                <input type="text" name="search_val" id="search_val" placeholder="请输入车号" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
    </div>
    <div class="item" style="margin-left: -30px;">
        <label>货品名称</label>
        <div class="layui-input-inline">
            <div class="layui-input-inline">
                <input type="text" name="search_val" id="search_val" placeholder="请输入货品名称" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
    </div>
    <div class="item" style="margin-left: -30px;">
        <label>货品规格 </label>
        <div class="layui-input-inline" style="margin-right: 100px;">
            <div class="layui-input-inline">
                <input type="text" name="search_val" id="search_val" placeholder="请输入货品规格" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
    </div>
    <div class="item">
        <label class="layui-form-label" style="margin-left: -47px;">开始时间</label>
        <div class="layui-input-inline">
            <div class="layui-inline" id="" style="margin-left: -10px;">
                <div class="layui-input-inline">
                  <input type="text" autocomplete="off" id="test6" name="main[expir_time]" class="layui-input" placeholder="开始时间">
                </div>
                <!-- <div class="layui-form-mid">-</div> -->
                <span style="margin-left: 16px;">结束时间</span>
                <div class="layui-input-inline">
                  <input type="text" autocomplete="off" id="test61" class="layui-input" placeholder="结束时间">
                </div>
              </div>
        </div>
    </div>

    <!-- <div class="item" style="margin-left: -23px;">
        <label>公司名称 </label>
        <div class="layui-input-inline">
            <select name="search_key" lay-verify="required" id="search_key">
                <option value="">选择搜索类型</option>
                <?php if(is_array($search_info) || $search_info instanceof \think\Collection || $search_info instanceof \think\Paginator): $i = 0; $__LIST__ = $search_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div> -->
    <!-- <div class="item">
        <div class="layui-input-inline">
            <input type="text" name="search_val" id="search_val" placeholder="搜索内容" autocomplete="off"
                   class="layui-input">
        </div>
    </div> -->
    <button type="button" style="width: 50px;" id="search" class="layui-btn layui-btn-sm " data-type="reload">
        <i class="layui-icon">&#xe615;</i>
    </button>
    <button type="button" style="width: 50px;" id="add" class="layui-btn layui-btn-sm ">
        <i class="layui-icon">&#xe654;</i>
    </button>
    <div style="position: absolute;right: 50px;">
        <a href="javascript:location.reload();" style="width: 50px;" class="layui-btn layui-btn-sm ">
            <i class="layui-icon">&#xe669;</i>
        </a>
    </div>
</form>

    
    <table id="table_ele" lay-filter="table_ele" style="flex: 1;"></table>
    
    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>


    </script>
    <script type="text/html" id="table_bar">
        
<img lay-event="edit" src="/public/static/images/icon/see_detial.png" style="margin-top: -4px;width: 12px;" alt="">
    <a  lay-event="edit" style="margin-left: -8px;">查看详情</a>
<!-- <a  lay-event="edit">编辑</a>
<a  lay-event="del">删除</a> -->

    </script>
</div>

<script type="text/javascript">
    layui.use(['table','laydate'], function () {
        var table = layui.table;
        var laydate=layui.laydate;
        laydate.render({
                elem:'#test6'
                ,type: 'datetime'
                ,value:'<?php echo date("Y-m-d H:i:s"); ?>'
                // ,range: ['#test-startDate-1', '#test-endDate-1']
            })
            laydate.render({
                elem:'#test61'
                ,type: 'datetime'
                ,value:'<?php echo date("Y-m-d H:i:s"); ?>'
                // ,range: ['#test-startDate-1', '#test-endDate-1']
            })
        table.render({
            elem: '#table_ele'
            , url: '<?php echo url("getNeedList"); ?>'
            , limit: 10
            , limits: [10,15,20]
            // , width : 1067
            , loading: true
            , title: '大类列表'
            , cols: [[
                 {field: 'id', title: '进货编号',sort:"true", width:100, fixed:'left', unresize: true, align: 'center'},
                 {field: 'id', title: '车号',sort:"true", width:100,  unresize: true, align: 'center'}
                 , {field: 'proposer', title: '发货', width:130, align: 'center'}
                 , {field: 'proposer', title: '收货', width:130, align: 'center'}
                 , {field: 'c_name', title: '货品名称', width: 120}
                , {field: 'c_name', title: '货品规格', width: 120}
                ,{field: 'pur_num', title: '存放地', width:130,align: 'center'}
                ,{field: 'pur_num', title: '毛重', width:130,align: 'center'}
                ,{field: 'pur_num', title: '皮重', width:130,align: 'center'}
                ,{field: 'pur_num', title: '净重', width:130,align: 'center'}
                , {field: 'proposer', title: '方量/吨', width:130, align: 'center'}
                ,{field: 'pur_num', title: '对方净重', width:130,align: 'center'}
                , {field: 'expir_time', title: '进站时间', width: 210,align: 'center'}
                , {field: 'expir_time', title: '出站时间', width: 210,align: 'center'}
                , {field:"uid",title:'单价',width:120,align: 'center'}
                , {field: 'material_id', title: '金额', width: 100, align: 'center'}
                , {field: 'c_name', title: '站名', width: 120}
                , {field:"remark",title:'备注',width:120,align: 'center'}
                , {field: 'c_name', title: '折方系数', width: 120}
                , {field: 'c_name', title: '操作员', width: 120}
                  , {field: 'c_name', title: '修改原因', width: 120}
                //  , {field: 'c_name', title: '物料规格', width: 120}
                // , {field: '', title:'要求到厂时间',width: 300,align: 'center',templet(d){
                //     return d.require_time1 + ' 至 ' + d.require_time2
                //     }}
                //     , {field: 'expir_time', title: '截至送货时间', width: 210,align: 'center'}
                //     , {field: 'expir_time', title: '采购备注', width: 210,align: 'center'}
                // , {field: 'expir_time', title: '验收标准', width: 210,align: 'center'}
               
                // , {field: 'audit_status', title: '审核状态', width: 150,align: 'center', templet(d){
                //         return d.audit_status.s_text;
                //     }}
                // , {field: 'create_time', title: '创建时间', width: 200,}

                // , {field: 'update_time', title: '更新时间', width: 200,}

                // , {field: 'add_info', title: '备注', width: 150, align: 'center'}
                // , {fixed: 'right', title: '操作', align: 'center', toolbar: '#table_bar', width: 110}
            ]]
            , page: true
            ,id : 'cateList'
        });

        //头工具栏事件
        table.on('toolbar(table_ele)', function (obj) {
            var checkStatus = table.checkStatus(obj.config.id);
            switch (obj.event) {
                case 'getCheckData':
                    var data = checkStatus.data;
                    layer.alert(JSON.stringify(data));
                    break;
                case 'getCheckLength':
                    var data = checkStatus.data;
                    layer.msg('选中了：' + data.length + ' 个');
                    break;
                case 'isAll':
                    layer.msg(checkStatus.isAll ? '全选' : '未全选');
                    break;

                //自定义头工具栏右侧图标 - 提示
                case 'LAYTABLE_TIPS':
                    layer.alert('这是工具栏右侧自定义的一个图标按钮');
                    break;
            }
            ;
        });

        //监听行工具事件
        table.on('tool(table_ele)', function (obj) {
            var data = obj.data;
            //console.log(data)
            if (obj.event === 'del') {
                layer.confirm('真的删除分类：'+ data.c_name ,{title:'警告',icon:3}, function (index) {
                    $.ajax({
                        type:'get',
                        url:'<?php echo url("del_category"); ?>',
                        data:{cid:data.id},
                        dataType:'json',
                        success(res){
                            if(res.code == 0){
                                obj.del();
                                layer.close(index);
                            }
                            layer.msg(res.msg)
                        }
                    });

                });
            } else if (obj.event ==='edit') {
                xadmin.open('合同详情','<?php echo url("edit_category"); ?>?cid='+data.id,764,680)
            }
        });
        var $ = layui.$, active = {
            reload: function () {
                var search_key = $('#search_key').val();
                var search_val = $('#search_val').val();
                if(search_key == ''){
                    layer.msg('请选择搜索类型',{icon:5});
                    return false;
                }
                if(search_val == ''){
                    layer.msg('请输入搜索内容',{icon:5});
                    return false;
                }
                //执行重载
                table.reload('cateList', {
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        search_key,
                        search_val
                    }
                });
            }
        };
        $('#search').on('click', function () {
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        $('#add').click(function(){
            xadmin.open('添加材料大类','<?php echo url("add_category"); ?>',460,300);
        })
    })
</script>

</body>
<script>
    // var _hmt = _hmt || [];
    // (function() {
    //     var hm = document.createElement("script");
    //     hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>
</html>