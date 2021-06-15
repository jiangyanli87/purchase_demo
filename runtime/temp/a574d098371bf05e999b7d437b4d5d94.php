<?php /*a:4:{s:68:"E:\TP5.0\purchase\application\purchase\view\index\audit_comfirm.html";i:1623398162;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
    
<!-- <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>采购需求列表</legend>
</fieldset> -->
<div class="layui-breadcrumb bread" style=" margin-top: 15px;margin-bottom: 13px;" >
    <!-- <div class="layui-breadcrumb "  > -->
    <span style="font-size: 18px;">当前位置: &nbsp;</span>
    <a href="<?php echo url('admin/index/home'); ?>">首页</a> 
    <a href="#">需求管理</a>
    <!-- <a href="">亚太地区</a> -->
    <a><cite>需求审核</cite></a>
</div>

    
<form class="layui-form aic" action="#">
    <div class="item" style="margin-left: -45px;margin-bottom: 10px;">
        <label>流水号 </label>
        <div class="layui-input-inline">
            <input type="text" name="pur_num" id="pur_num" placeholder="为空时显示全部" autocomplete="off"
                   class="layui-input" style="background: #fff !important;">
        </div>
    </div>
    <div class="item" style="margin-left: -18px;margin-bottom: 10px;">
        <label>报价状态</label>
        <div class="layui-input-inline">
            <select name="audit_status" lay-verify="required" id="audit_status" >
          
                <option value="5">未审核</option>
                <option value="6">已通过</option>
                <option value="7">未通过</option>
            </select>
        </div>
    </div>
    <button type="button" style="width: 50px;" id="search" class="layui-btn layui-btn-sm " data-type="reload">
        <i class="layui-icon">&#xe615;</i>
    </button>
    <!--<button type="button" style="width: 50px;" id="add" class="layui-btn layui-btn-sm ">-->
    <!--<i class="layui-icon">&#xe654;</i>-->
    <!--</button>-->
    <!-- <div style="position: absolute;right: 50px;">
        <a href="javascript:location.reload();" style="width: 50px;" class="layui-btn layui-btn-sm ">
            <i class="layui-icon">&#xe669;</i>
        </a>
    </div> -->
</form>

    
<style type="text/css">
    .left-box {
        width: 300px;
        min-width: 300px;
        flex-grow: 0;
    }
    .pur-list {
        /*width: 100%;*/
        height: 700px;
        overflow-y: auto;
        overflow-x: hidden;
        padding-right: 20px;
    }
    .pur-list::-webkit-scrollbar, .info-box::-webkit-scrollbar { /*滚动条整体样式*/
        width: 5px; /*高宽分别对应横竖滚动条的尺寸*/
        height: 1px;
    }
    .pur-list::-webkit-scrollbar-thumb, .info-box::-webkit-scrollbar-thumb { /*滚动条里面小方块*/
        border-radius: 5px;
        -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
        background: #dddddd;
    }
    .pur-list::-webkit-scrollbar-track, .info-box::-webkit-scrollbar-track { /*滚动条里面轨道*/
        -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        background: #f5f5f5;
        margin-left: 10px;
    }
    #info_box {
        overflow-y: auto;
        overflow-x: hidden;
        /*padding-right: 20px;*/
    }
    .pur-item {
        /*width: 100%;*/
        width: 290px;
        height: 263px;
        background: #FFFFFF;
        border: 1px solid #DDDDDD;
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;

    }
    .pur-body {
        /*padding: 10px 0;*/
    }
    .p-b-item {
        /*width: 208px;*/
        width: 100%;
        /*height: 12px;*/
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #999999;
        /*line-height: 60px;*/
        margin-top: 15px;
    }
    .p-head {
        /* width: 194px; */
        height: 16px;
        font-size: 16px;
        font-family: Microsoft YaHei;
        font-weight: bold;
        color: #333333;
        /*line-height: 60px;*/
    }
    .line {
        width: 6px;
        height: 263px;
        margin-right: 14px;
        background: #dddddd;
    }
    .line-active {
        background: #086DF3;
    }
    .left-btn, .right-btn {
        width: 80px;
        height: 30px;
        background: #086DF3;
        border-radius: 4px;
    }
    #page {
        text-align: left;
    }
    .layui-laypage span, .layui-laypage a {
        text-align: center;
    }
    .right-box {
        padding-left: 20px;
        flex-grow: 1;
    }
    .right-box .title {
        width: 96px;
        height: 16px;
        font-size: 16px;
        font-family: Microsoft YaHei;
        font-weight: bold;
        color: #333333;
    }
    .audit-btn {
        width: 100px;
        height: 30px;
        background: #086DF3;
        border-radius: 4px;
    }
    .item {
        margin: 15px 0;
        /*margin-top: 15px;*/
    }
    .title1 {
        width: 120px;
    }
    .content {
        color: #333333;
    }
    .line2 {
        /*width: 1px;*/
        height: 110px;
        border: 1px solid #E6E6E6;
    }
    .head {
        margin-bottom: 20px;
    }
    .c-name {
        padding-right: 20px;
    }
    .cc-name {

        /*width: 179px;*/
        height: 262px;
        background: #F0F6FF;
        /*width: 120px;*/
        /*height: 46px;*/
        font-size: 16px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
        /*line-height: 20px;*/
    }
    .info-item {
        /*width: 1285px;*/
        /*height: 264px;*/
        background: #FFFFFF;
        margin-bottom: 20px;
        /*border: 1px solid #DDDDDD;*/
    }
    .b-item {
        font-size: 14px;
        font-weight: 400;
        color: #999999;
        height: 85px;
        /*padding: 0 20px;*/
        /*margin: 20px 0 10px 0;*/
    }
    .b-item > div {
        height: 100%;
    }
    .line3 {
        /*width: 1px;*/
        height: 30px;
        border: 1px solid #E6E6E6;
    }
    .b-title {
        width: 120px;
        color: #999999;
        text-align: left;
    }
    .b-content {
        color: #333333;
        text-align: left;
    }
    th {
        text-align: center !important;
        background: #F5F5F5;
        font-size: 14px !important;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
    }
    td {
        text-align: center !important;
    }
    .x-admin-sm .layui-form-checkbox span {
        font-size: 14px !important;
    }
    .layui-table, .layui-table-view {
        margin: 0;
    }
</style>
<div class="c-box d-dr">
    <div class="left-box" >
        <div class="pur-list" id="pur_list">
  
        </div>
        <div class="page" id="page" style="width: 348px;"></div>
    </div>
    <div class="right-box" style="">
        <div class="head d-dr-jsb aic">
            <div class="title">
                需求详情
            </div>
            <div class="audit-btn">
                <button class="layui-btn audit-btn" style="font-size: 16px;" onclick="go_check()">
                    开始审核
                </button>
            </div>
        </div>
        <div class="info-box" id="info_box">
           

    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>

    </script>
    <script type="text/html" id="table_bar">
        

    </script>
</div>


<!-- <script type="text/javascript">
    layui.use('table', function () {
        var table = layui.table;
        table.render({
            elem: '#info_box'
            , url: '/public/static/js/data.json'
            // , toolbar: '#toolbar' //开启头部工具栏，并为其绑定左侧模板
            // , defaultToolbar: ['filter', 'exports', 'print'            
            // ]
            , loading: true
            , title: '采购需求列表'
            , cols: [[
                {field: 'title', title: '物料名称',width:130,align: 'center'}
                , {field: 'specification', title: '物料规格',width:272,  align: 'center'},
                {field:"coding",title:'物料编码',width:130,align: 'center'}
            
                , {field: 'num', title: '数量（单位）',width:130, align: 'center'}
                , {field: 'check', title:'验收标准',width:130,align: 'center',}
               
                , {field: 'remark', title: '备注', width:140,align: 'center'}
         
            ]]
         
            ,id : 'purList'
        });

        //头工具栏事件


    })
</script> -->


<script type="text/html" id="pur_item">
    {{#  layui.each(d.data, function(index, item){ }}
    <div class="pur-item" onclick="getComfirmItemList('{{item.id}}', this)" id="pur_{{item.id}}">
        <div class="line"></div>
        <div class="pur-body d-dc-jc">
            <div class="p-head">流水号：{{item.pur_num}}【采购部】</div>
            <div class="">
                <div class="p-b-item">
                    <img src="/public/static/images/purchase/proposer.png" alt="">
                    申请人：{{item.proposer}}
                </div>
                <div class="p-b-item">
                    <img src="/public/static/images/purchase/time.png" alt="">
                    报价截止时间：{{item.expir_time}}
                </div>
                <div class="p-b-item">
                    <img src="/public/static/images/purchase/time.png" alt="">
                    要求到厂时间：{{item.require_time1}}
                </div>
                <div class="p-b-item">
                    <img src="/public/static/images/purchase/time.png" alt="">
                    截止送货时间：{{item.require_time2}}
                </div>
             
                <div class="p-b-item">
                    <img src="/public/static/images/purchase/gs.png" alt="">
                    公司代码：{{item.uid}}
                </div>
                <!-- <div class="p-b-item">
                    <img src="/public/static/purchase/images/purchase/time.png" alt="">
                    审核状态：{{item.price_status.text}}
                </div> -->
                <div class="p-b-item d-dr-jsb aic">
                    <!-- <button class="layui-btn left-btn">报价记录</button> -->
                    <button class="layui-btn right-btn" style="margin-left: 172px;">需求详情</button>
                </div>
            </div>
        </div>
    </div>
    {{#  }); }}
    {{#  if(d.data.length === 0){ }}
    无数据
    {{#  } }}
</script>
<script type="text/html" id="info_item">

    <div class="info-item d-dr">
        <table class="layui-table">
            <tr>
                <th>物料名称</th>
                <th>物料规格</th>
                <th>物料编码</th>
                <th>数量(单位)</th>
                <th>验收标准</th>
                <th>备注</th>
            </tr>
            {{#  layui.each(d.data, function(index, item){ }}
              <tr>
                <td>{{item.m_name}}</td>
                <td>{{item.spec}}</td>
                <td>{{item.price_id_s}}</td>
               <td>{{item.num}} ({{item.units}})</td> 
               <td>—</td>
               <td>{{item.remark}}</td>
              </tr> 
            <!-- <tr>
                <th>物料名称</th>
                <td>{{item.m_name}}</td>
                <th>规格</th>
                <td>{{item.spec}}</td>
                <th>采购数量</th>
                <th>{{item.num}} ({{item.units}})</th>
                <th>最低报价</th>
                <th>—</th>
            </tr>
            <tr>
                <th>采购备注</th>
                <th colspan="3">{{item.remark}}</th>
                <th>未签订最低价格说明</th>
                <th colspan="3">{{item.reason}}</th>
            </tr> -->
            <!-- {{# layui.each(item.sel_price, function(iindex, iitem){ }}
            <tr>
                <td colspan="8">
                    <div class="d-dr-jsb aic">
                            <input type="checkbox" name="" title="朱东晨公司" lay-skin="primary"></div>
                        {{# if(iitem.audit_status.value == 0){ }}
                        <div class="d-dr-jcac layui-form">
                            <input type="checkbox" name="" title="" lay-skin="primary">
                        </div>
                        {{# } else { }}
                        <div class="d-dc-jcac layui-form">
                            <p>{{iitem.supplier.supp_name}}</p>
                            <p>{{ iitem.audit_status.text }}</p>
                        </div>
                        {{# } }}
                        <div class="b-item d-dr-jsb aic">
                            <div class="">
                                <div class="d-dr item">
                                    <div class="b-title">确认数量（单位）</div>
                                    <div class="b-content">{{iitem.choose_num}}（{{item.units}}）</div>
                                </div>
                                <div class="d-dr item">
                                    <div class="b-title">选择价格</div>
                                    <div class="b-content">{{ iitem.price }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="line3"></div>
                        <div class="b-item d-dr-jsb aic">
                            <div class="">
                                <div class="d-dr item">
                                    <div class="b-title">运费</div>
                                    <div class="b-content">—</div>
                                </div>
                                <div class="d-dr item">
                                    <div class="b-title">承诺送货时间</div>
                                    <div class="b-content">{{iitem.promise_time}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="line3"></div>
                        <div class="b-item d-dr-jsb aic">
                            <div class="">
                                <div class="d-dr item">
                                    <div class="b-title">付款方式</div>
                                    <div class="b-content">{{iitem.pay_way}}</div>
                                </div>
                                <div class="d-dr item">
                                    <div class="b-title">产地</div>
                                    <div class="b-content">{{iitem.prod_place}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="line3"></div>
                        <div class="b-item d-dr-jsb aic">
                            <div class="">
                                <div class="d-dr item">
                                    <div class="b-title">报价备注</div>
                                    <div class="b-content">{{iitem.remark}}</div>
                                </div>
                                <div class="d-dr item">
                                    <div class="b-title">帐期</div>
                                    <div class="b-content">—</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            {{# }); }} -->
            <!-- {{# if(item.sel_price.length === 0){ }}
            <tr>
                <td colspan="8">
                    无数据
                </td>
            </tr>
            {{# } }} -->
            {{#  }); }}
        </table>
    </div>
    {{#  if(d.data.length === 0){ }}
    无数据
    {{#  } }}
</script>
<script type="text/javascript">
    layui.use(['table', 'form', 'laydate', 'laypage', 'laytpl'], function () {
        var laypage = layui.laypage,
            form = layui.form,
            laytpl = layui.laytpl;
        //加载尺寸
        window.loadSize = function () {
            var height = window.innerHeight;
            var width = window.innerWidth;
            console.log(height);
            // $('#pur_list').css({height: (height - 717) + 'px'})
            // $('#info_box').css({height: (height - 242) + 'px'})
        };
        //重置窗口尺寸
        window.onresize = function () {
            loadSize();
        };
        laypage.render({
            elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
            , count: 50 //数据总数，从服务端得到
            , prev: '<i class="layui-icon layui-icon-left"></i>'
            , next: '<i class="layui-icon layui-icon-right"></i>'
            , limit: 10
            , groups: 5
            // , curr: page === 1 ? 1 :location.hash.replace('#!page=', '')
            , hash: 'page'
            // , layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
            , layout: ['prev', 'page', 'next', 'skip']
            , jump: function (obj, first) {
                // //首次不执行
                if (!first) {
                    loadPage(obj.curr, obj.limit);
                }
            }
        });
        //加载采购主数据
        window.loadPage = function (page = 1, limit = 5) {
            $('#info_box').empty();
            var getTpl = $('#pur_item').html(),
                view = $('#pur_list'),
                type = $('#audit_status').val(),
                pur_num = $('#pur_num').val();
            type = type ? type : 0;
            $.get('<?php echo url("getPurList"); ?>', {pur_num, type, page, limit,}, function (res) {
                laytpl(getTpl).render(res.data, function (html) {
                    view.html(html);
                    if (res.data.data.length > 0) {
                        getComfirmItemList(res.data.data[0].id);
                    }
                });
                // 底部页码
                laypage.render({
                    elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
                    , count: res.data.count //数据总数，从服务端得到
                    , prev: '<i class="layui-icon layui-icon-left"></i>'
                    , next: '<i class="layui-icon layui-icon-right"></i>'
                    , limit: limit
                    , curr: page === 1 ? 1 : location.hash.replace('#!page=', '')
                    , hash: 'page'
                    // , layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
                    , layout: ['count', 'prev', 'page', 'next', 'skip']
                    , jump: function (obj, first) {
                        // //首次不执行
                        if (!first) {
                            loadPage(obj.curr, obj.limit);
                        }
                    }
                });
            });
        };
        //审核采购确认报价数据
        window.getComfirmItemList = function (pm_id, obj = null) {
            // console.log(pm_id);return;
            if (obj === null) {
                obj = document.getElementById('pur_' + pm_id);
            }
            $(obj).children('.line').addClass('line-active');
            $(obj).siblings('div').children('.line').removeClass('line-active');
            $.get('<?php echo url("getAuditComfirmData"); ?>', {pm_id}, function (res) {
                var getTpl = $('#info_item').html(),
                    view = $('#info_box');
                laytpl(getTpl).render(res, function (html) {
                    view.html(html);
                    form.render();
                });
            })

            
        };
        loadPage();
        loadSize();
        //搜索按钮
        $('#search').click(function () {
            loadPage();
        });
          //开始审核
          window.go_check=function(){
            xadmin.open("报价审核",'<?php echo url("go_check"); ?>',592,432)
        }
    });
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