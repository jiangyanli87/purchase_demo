<?php /*a:4:{s:70:"E:\TP5.0\purchase\application\purchase\view\index\show_supp_price.html";i:1623115461;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
    
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>选择报价</legend>
</fieldset>

    
<style type="text/css">
    .info{
        font-size: 18px;font-weight: bold
    }
    #all_supp_counts,  #supp_num{
        font-size: 18px;font-weight: bold
    }
</style>
<p  class="info">
    采购单号：<span></span> ，材料名称：<span></span>，材料规格：<span></span>，采购数量：<span></span> ，已选择数量：<span id="all_supp_counts" style=""></span>，已选择供应商：<span id="supp_num" style="">个</span>
   
</p>
<br>
<p>
    <span style="color: red;">报价截至时间未结束，暂无法查看报价信息</span>
</p>

    
<table id="table_ele" lay-filter="table_ele"></table>

    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>

    </script>
    <script type="text/html" id="table_bar">
        
<a class="layui-btn layui-btn-sm" lay-event="edit">选择</a>
<a class="layui-btn layui-btn-sm" lay-event="del">退回</a>
<a class="layui-btn layui-btn-sm" lay-event="cancel">取消</a>
<a class="layui-btn layui-btn-sm" lay-event="old_price">历史</a>

    </script>
</div>

<script type="text/javascript">
    layui.use('table', function () {
        var table = layui.table;
        table.render({
            elem: '#table_ele'
            , url: '<?php echo url("getSuppPriceData"); ?>'
            // , toolbar: '#toolbar' //开启头部工具栏，并为其绑定左侧模板
            , defaultToolbar: ['filter', 'exports', 'print'
                //     , { //自定义头部工具栏右侧图标。如无需自定义，去除该参数即可
                //     title: '提示'
                //     ,layEvent: 'LAYTABLE_TIPS'
                //     ,icon: 'layui-icon-tips'
                // }
            ]
       
            , page: false
            , limit: 10
            , limits: [10,15,20]
            , height: 600
            , loading: true
            , title: '选择报价'
            , cols:  [[
                { title: '采购编号', fixed:"left",align:'center', width:80, templet(d){
                        return d.pmain.pur_num;
                    }},
                {field: 'supp_name', title: '供应商', align:'center',width:120, templet(d){
                        return d.supplier.supp_name;
                    }},
                //{field: 'counts', title: '需求数量', align:'center',width:120},
                {field: 'choose_num', title: '选择数量', align:'center',width:120},
                {field: 'price', title: '供应商报价', align:'center',width:120},
                {field: 'num', title: '可供数量', align:'center',width:120},
                // {field: 'repayment', title: '账期', align:'center',width:80},
                {field: 'prod_place', title: '产地', align:'center',width:100},
                //{field: 'yunfei', title: '万昌运费', align:'center',width:100},
                {field: 'remark', title: '备注', align:'center',width:120},
                {field: 'promise_time', title: '交货时间', align:'center',width:180},
                {field: 'units', title: '单位', align:'center',width:120, templet(d){
                        return d.pitem.units;
                    }},
                {field: 'material_id', title: '材料编号', align:'center', width:100, templet(d){
                        return d.pitem.m_num;
                    }},
                {field: 'id', title: '报价编号', align:'center',width:100},
                // {field: 'sub_status', title: '选择状态', align:'center',width:80},
                // {field: 'audit_status', title: '审核', align:'center',width:80},
                {field: 'sub_status_txt', title: '报价状态', align:'center',fixed:"right",width:100},
                {field: 'status', title: '选择状态', align:'center',fixed:"right",width:120},
                // {field: 'audit_status_txt', title: '审核状态', align:'center',fixed:"right",width:100},
                {title: '操作', width:240, toolbar:'#table_bar',fixed:"right",align:"center"}
            ]]
            ,done(res){
                if (res.data.length >0){

                }
            }
            ,id : 'table_ele'
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
                layer.confirm('真的删除采购单：'+ data.pur_num ,{title:'警告',icon:3}, function (index) {
                    $.ajax({
                        type:'get',
                        url:'<?php echo url("del_need"); ?>',
                        data:{p_id:data.id},
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
            } else if (obj.event === 'check') {
                xadmin.open('审核','<?php echo url("audit_need"); ?>',460,460)

            }else if (obj.event==='tem_record') {
                xadmin.open('模板记录','<?php echo url("sendwxmsg_list"); ?>',460,460)
            }
            else if (obj.event ==='pur_item') {

                xadmin.open('查看','<?php echo url("pur_item"); ?>?p_id='+data.id,1050,400)
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
                table.reload('purList', {
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
            xadmin.open('发布采购需求','<?php echo url("add_need"); ?>',1050,730)
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