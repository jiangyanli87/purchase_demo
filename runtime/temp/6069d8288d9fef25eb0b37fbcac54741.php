<?php /*a:4:{s:66:"E:\TP5.0\purchase\application\purchase\view\material\material.html";i:1623234050;s:67:"E:\TP5.0\purchase\application\purchase\view\layout\table_base2.html";i:1622860286;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
    

<style>
    .title_line{
        width: 100%;
    height: 1px;
    background: #E6E6E6;
    margin-top: 15px;
    margin-bottom: 30px;
    }
 
    .cute .title{
        font-size: 16px !important;
font-family: Microsoft YaHei;
font-weight: 400;
color: #333333;
/* line-height: 24px; */
cursor: pointer;
    }
    .cute .t1{
        margin-right: 23px;
 
    }
    .layui-tab-title .layui-this{
        color: #086DF3 !important;
        font-weight: bold !important;
    }
    .layui-tab-title .layui-this::after{
        border-bottom: 2px solid #086DF3 !important;
    }
    .form_search{
        margin-top: 25px;
        
    }
    .form_search .item{
        margin-left: -46px;
    }
</style>
<!-- <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>111</legend>
</fieldset> -->
<div class="layui-breadcrumb bread" style=" margin-top: 15px;margin-bottom: 13px;" >
    <span style="font-size: 18px;">当前位置: &nbsp;</span>
    <a href="#">首页</a>
    <a href="#">报价管理</a>
    <a><cite>数据统计</cite></a>
  </div>
  <!-- <div class="cute">
    <span class="title t1" >供应商数据统计</span>
    <span class="title "></span>
    <div class="title_line"></div>
</div> -->

  <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
    <ul class="layui-tab-title cute">
      <li class="layui-this title">供应商数据统计</li>
      <li class="title">物资总数统计</li>
 
    </ul>
    <div class="layui-tab-content" style="height: 100px;">
      <div class="layui-tab-item layui-show">
          <!-- 搜索栏 -->
        <form class="layui-form form_search" action="#">
            <div class="item">
                <label class="layui-form-label">日期范围</label>
                <div class="layui-input-inline">
                    <div class="layui-inline" id="">
                        <div class="layui-input-inline">
                          <input type="text" autocomplete="off" id="test5" name="main[expir_time]" class="layui-input" placeholder="开始时间">
                        </div>
                        <!-- <div class="layui-form-mid">-</div> -->
                        <span>-</span>
                        <div class="layui-input-inline">
                          <input type="text" autocomplete="off" id="test51" class="layui-input" placeholder="结束时间">
                        </div>
                      </div>
                </div>
            </div>
            <div class="item">
                <label class="layui-form-label">供应商</label>
                <div class="layui-input-inline">
                    <select name="search_key" lay-verify="required" id="search_key">
                        <option value="">请选择</option>
                        <?php if(is_array($search_info) || $search_info instanceof \think\Collection || $search_info instanceof \think\Paginator): $i = 0; $__LIST__ = $search_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
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
        <!-- 数据表格 -->
        <div id="table_ele1"></div>
      </div>
      <!-- 数据总数统计 -->
      <div class="layui-tab-item">
  <!-- 搜索栏 -->
  <form class="layui-form form_search" action="#">
    <div class="item">
        <label class="layui-form-label" >日期范围</label>
        <div class="layui-input-inline">
            <div class="layui-inline" id="">
                <div class="layui-input-inline">
                  <input type="text" autocomplete="off" id="test6" name="main[expir_time]" class="layui-input" placeholder="开始时间">
                </div>
                <!-- <div class="layui-form-mid">-</div> -->
                <span>-</span>
                <div class="layui-input-inline">
                  <input type="text" autocomplete="off" id="test61" class="layui-input" placeholder="结束时间">
                </div>
              </div>
        </div>
    </div>
    <div class="item">
        <label class="layui-form-label">供应商</label>
        <div class="layui-input-inline">
            <select name="search_key" lay-verify="required" id="search_key">
                <option value="">请选择</option>
                <?php if(is_array($search_info) || $search_info instanceof \think\Collection || $search_info instanceof \think\Paginator): $i = 0; $__LIST__ = $search_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
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
     
 <!-- 数据表格 -->
          <div id='table_ele2'></div>
      </div>

    </div>
  </div> 

    <!-- 
    <form class="layui-form" action="#">
        <div class="item">
            <div class="layui-input-inline">
                <select name="search_key" lay-verify="required" id="search_key">
                    <option value="">选择搜索类型</option>
                    <?php if(is_array($search_info) || $search_info instanceof \think\Collection || $search_info instanceof \think\Paginator): $i = 0; $__LIST__ = $search_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="item">
            <div class="layui-input-inline">
                <input type="text" name="search_val" id="search_val" placeholder="搜索内容" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <button type="button" style="width: 50px;" id="search" class="layui-btn layui-btn-sm layui-btn-normal" data-type="reload">
            <i class="layui-icon">&#xe615;</i>
        </button>
        <button type="button" style="width: 50px;" id="add" class="layui-btn layui-btn-sm">
            <i class="layui-icon">&#xe654;</i>
        </button>
        <div style="position: absolute;right: 50px;"> -->
            <!--<button type="submit" style="width: 50px;" class="layui-btn layui-btn-sm layui-btn-normal">-->
            <!--<i class="layui-icon">&#xe601;</i>-->
            <!--</button>-->
            <!-- <button type="button" style="width: 50px;" onclick="javascript:location.reload();" class="layui-btn layui-btn-sm">
                <i class="layui-icon">&#xe669;</i>
            </button>
        </div>
    </form>
     -->
    
    <table id="table_ele" lay-filter="table_ele" style="flex: 1;"></table>
    
    <script type="text/html" id="toolbar">
    
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
    </div>
    
    </script>
    <script type="text/html" id="table_bar">
        
    <a  lay-event="edit">编辑</a>
    <a  lay-event="del">删除</a>
    
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
            
            laydate.render({
                elem:'#test5'
                ,type: 'datetime'
                ,value:'<?php echo date("Y-m-d H:i:s"); ?>'
                // ,range: ['#test-startDate-1', '#test-endDate-1']
            })
            laydate.render({
                elem:'#test51'
                ,type: 'datetime'
                ,value:'<?php echo date("Y-m-d H:i:s"); ?>'
                // ,range: ['#test-startDate-1', '#test-endDate-1']
            })
            table.render({
                elem: '#table_ele1'
                , url: '<?php echo url("getMaterialData"); ?>'
                , limit: 10
                , limits: [10,15,20]
                , loading: true
                , title: '材料列表'
                , cols: [[
                    // {type: 'checkbox', fixed: 'left'}
                     {field: 'id', title: '流水号', width: "9.8%", unresize: true, align:'center'}
                    , {field: 'm_num', title: '报价编号', width:"8%", align:'center'}
                    , {field: 'create_time', title: '创建时间', width: "16%", align:'center'}
                    , {field: 'c_name', title: '供应商', width: "9%", align:'center'}
                    // , {field: '', title: '材料大类', width: 240}
                    , {field: 'm_name', title: '材料名称', width: "8%", align:'center'}
                    , {field: 'spec', title: '材料规格', width: "10%", align:'center'}
                    , {field: 'units', title: '单价', width: "6%", align:'center'}
                    , {field: 'update_time', title: '交货时间', width: "16%", align:'center'}
                    , {field: 'remark', title: '备注', width: "8%", align:'center'}
                    , {field: 'id', title: '物料编号', width: "9%", unresize: true, align:'center'}
                   
                    // , { title: '操作', align: 'center', toolbar: '#table_bar', width: 140}
                ]]
                , page: true
                ,id : 'materList',
                done: function (res, curr, count){
$("table").css("width", "100%");}
            });
            table.render({
                elem: '#table_ele2'
                , url: '<?php echo url("getMaterialData"); ?>'
                , limit: 10
                , limits: [10,15,20]
                , loading: true
                , title: '材料列表'
                , cols: [[
                    // {type: 'checkbox', fixed: 'left'}
                     {field: 'id', title: '流水号', width: "14.28%",  unresize: true, align:'center'}
                    , {field: 'm_num', title: '物料编码', width: "14.28%", align:'center'}
                    // , {field: 'c_name', title: '材料大类', width: 240}
                    , {field: 'm_name', title: '物料名称', width: "14.3%", align:'center'}
                    , {field: 'spec', title: '物料规格', width: "14.28%", align:'center'}
                    , {field: 'units', title: '数量', width: "14.28%", align:'center'}
                    , {field: 'station_name', title: '总金额', width: "14.28%", align:'center'}
                    , {field: 'station_name', title: '平均价格', width: "14.28%", align:'center'}
                    // , {field: 'create_time', title: '创建时间', width: 240}
                    // , {field: 'update_time', title: '修改时间', width: 240}
                    // , {title: '操作', align: 'center', toolbar: '#table_bar', width: 140}
                ]]
                , page: true
                ,id : 'materList',
                done: function (res, curr, count){
$("table").css("width", "100%");
//这里设置表格的宽度为100%
},
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
                    layer.confirm('真的删除材料：'+ data.m_name + '，规格：' + data.spec ,{title:'警告',icon:3}, function (index) {
                        $.ajax({
                            type:'get',
                            url:'<?php echo url("del_material"); ?>',
                            data:{mid:data.id},
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
                    xadmin.open('编辑材料','<?php echo url("edit_material"); ?>?mid='+data.id,460,400)
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
                    table.reload('materList', {
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
                xadmin.open('添加材料','<?php echo url("add_material"); ?>',460,400);
            })
        })
// var tabs=document.getElementsByClassName('title');
// var content=document.getElementById("data_list");
//         for(var i=0;i<tabs.length;i++){
//        tabs[i].index=i
//        tabs[i].onclick=function(){
//            for(var j=0;j<content.length;j++){
//                content[j].style.display="none"
//            }
//            content[this.index].style.display="block"
//        }
//    }
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