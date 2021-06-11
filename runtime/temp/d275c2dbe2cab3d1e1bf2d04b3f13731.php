<?php /*a:4:{s:62:"E:\TP5.0\purchase\application\purchase\view\index\comfirm.html";i:1623164795;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
    <legend>采购确认</legend>
</fieldset> -->
<div class="layui-breadcrumb bread" style=" margin-top: 15px;margin-bottom: 13px;" >
    <span style="font-size: 18px;">当前位置: &nbsp;</span>
    <a href="<?php echo url('admin/index/home'); ?>">首页</a> 
    <a href="#">报价管理</a>
    <!-- <a href="">亚太地区</a> -->
    <a><cite>报价确认</cite></a>
  </div>  

    
<form class="layui-form aic" action="#">
    <div class="item" style="margin-left: -43px;">
        <label>流水号 </label>
        <div class="layui-input-inline">
            <input type="text" name="pur_num" id="pur_num" placeholder="为空时显示全部" autocomplete="off"
                   class="layui-input">
        </div>
    </div>

    <div class="item">
        <label>显示类型</label>
        <div class="layui-input-inline">
            <select name="audit_status" lay-verify="required" id="audit_status">
                <option value="0">未确认</option>
                <option value="1">已确认</option>
                <option value="2">已取消</option>
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
    <div id="page" style="position: absolute;right: 50px;"></div>
</form>

    
<style type="text/css">
    .pur-item {
        /*width: 1600px;*/
        /*height: 240px;*/
        /*border: 1px solid #dddddd;*/
        /*opacity: 0.55;*/
        /* box-shadow: 0 0 8px #dddddd; */
        margin-top: 20px;
        border-radius: 4px;
        background: #F8F8F8;;
        padding-bottom: 20px;
    }
    .pur-item:hover {
        box-shadow: 0 0 18px #dddddd;
    }
    .p-num {
        font-size: 16px;
        font-weight: bold;
        color: #333333;
        display: flex;
        flex-direction: row;
        /* text-align: center; */
        justify-content: flex-start;
        margin: auto 0;
    }
    .img {
        margin-right: 10px;
    }
    .item-title {
        padding: 20px 20px 0 20px;
    }
    .item-title1 {
        padding: 0 20px;
    }
    .item-title1 .title {
        color: #999999;
    }
    .item-body {
        background: #ffffff;
        margin: 0 20px 20px 20px;
    }
    .item-body:last-of-type, .empty:last-of-type {
        margin-bottom: 0;
    }
    .empty {
        padding: 20px;
        color: #333333;
        text-align: center;
        font-size: 14px;
        background: #ffffff;
        margin: 0 20px 20px 20px;
    }
    .b-item {
        font-size: 14px;
        font-weight: 400;
        color: #999999;
        padding: 0 20px;
        margin: 20px 0 10px 0;
        flex: 1;
    }
    .line {
        /*width: 1px;*/
        height: 60px;
        border: 1px solid #E6E6E6;
    }
    /*.b-item:nth-type-of (){*/
    /**/
    /*}*/
    /*.b-item:nth-of-type(1){*/
    /*border-right: 1px solid #dddddd;*/

    /*}*/

    /*.b-item:nth-of-type(2){*/
    /*border-right: 1px solid #dddddd;*/
    /*}*/
    .item {
        margin: 15px 0;
        /*margin-top: 15px;*/
    }
    .item .icon{
        margin-right: 10px;
    }
    .title {
        width: 120px;
    }
    .content {
        color: #333333;
    }
    .t-button {
        width: 100px;
        height: 30px;
        /*background: #086DF3;*/
        border-radius: 2px;
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: bold;
        color: #FFFFFF;
    }
    .c-button {
        width: 116px;
        height: 30px;
        border: 1px solid #2F91FC;
        border-radius: 2px;
        background: #ffffff;
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #2F91FC;
        line-height: 10px;
    }
    .c-b-box {
        /*height: 111.5px;*/
    }
    #page {
        text-align: right;
        margin-top: 20px;
    }
    .layui-laypage-count {
     
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
        line-height: 10px;
    }
</style>

<div class="pur-box" id="pur_box">
</div>


    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>

    </script>
    <script type="text/html" id="table_bar">
        

    </script>
</div>

<script type="text/html" id="pur_item">
    {{#  layui.each(d.data, function(index, item){ }}
    <div class="pur-item" >
        <div class="item-title d-dr-jsb">
            <div class="p-num">
                <img src="/public/static/images/purchase/num.png" alt="" class="img">
                采购单号：{{ item.pur_num }}【{{item.proposer}}】
            </div>
            <div class="btn-box">
                <button class="layui-btn t-button">重新发送</button>
                <button onclick="offer_msg_record()" class="layui-btn t-button">消息记录</button>
                <button class="layui-btn t-button">结束确认</button>
                <!-- <button class="layui-btn t-button">供应商电话</button> -->
            </div>
        </div>
        <div class="item-title1 d-dr-jsb">
            <div class=" item d-dr aic">
                <img src="/public/static/images/purchase/proposer.png" alt="" class="icon">
                <div>
                    <span class="title">申请人：</span>
                    <span class="content">{{ item.proposer }}</span>
                </div>
            </div>
            <div class=" item d-dr aic">
                <img src="/public/static/images/purchase/gs.png" alt="" class="icon">
                <div>
                    <span class="title">采购部门：</span>
                    <span class="content">
                    {{ item.proposer }}
                </span>
                </div>
            </div>
            <div class=" item d-dr aic">
                <img src="/public/static/images/purchase/time.png" alt="" class="icon">
                <div>
                    <span class="title">要求到厂时间：</span>
                    <span class="content">
                    {{ item.require_time1 }} 至 {{ item.require_time2 }}
                </span>
                </div>
            </div>
            <div class=" item d-dr aic">
                <img src="/public/static/images/purchase/time.png" alt="" class="icon">
                <div>
                    <span class="title">报价截至时间：</span>
                    <span class="content">{{ item.expir_time }}</span>
                </div>
            </div>
        </div>
        {{# layui.each(item.item, function(iindex, iitem){ }}
        <div class="item-body layui-row d-dr aic" >
            <div class="b-item d-dr-jsb aic">
                <div class="">
                    <div class="d-dr item">
                        <div class="title">原材料编号</div>
                        <div class="content">{{ iitem.m_num }}</div>
                    </div>
                    <div class="d-dr item">
                        <div class="title">物资名称</div>
                        <div class="content">
                            {{ iitem.m_name }}
                        </div>
                    </div>
                </div>
                <!--<div class="line"></div>-->
            </div>
            <!--<div class="line"></div>-->
            <div class="b-item d-dr-jsb aic">
                <div class="">
                    <div class="d-dr item">
                        <div class="title">规格型号</div>
                        <div class="content">{{ iitem.spec }}</div>
                    </div>
                    <div class="d-dr item">
                        <div class="title">数量（单位）</div>
                        <div class="content">{{ iitem.num }} {{ iitem.units }}</div>
                    </div>
                </div>
                <!--<div class="line"></div>-->
            </div>
            <!--<div class="line"></div>-->
            <div class="b-item d-dr-jsb aic">
                <div class="">
                    <div class="d-dr item">
                        <div class="title">上次价格</div>
                        <div class="content">—</div>
                    </div>
                    <div class="d-dr item" style="width: 250px;">
                        <div class="title">截至送货时间</div>
                        <div class="content">{{ iitem.end_time }}</div>
                    </div>
                </div>
                <!--<div class="line"></div>-->
            </div>
            <!--<div class="line"></div>-->
            <div class="b-item d-dr-jsb aic">
                <div class="">
                    <div class="d-dr item">
                        <div class="title">验收标准</div>
                        <div class="content">{{ iitem.ys_standard }}</div>
                    </div>
                    <div class="d-dr item">
                        <div class="title">备注</div>
                        <div class="content">{{ iitem.remark }}</div>
                    </div>
                </div>
                <!--<div class="line"></div>-->
            </div>
            <!--<div class="line"></div>-->
            <div class="b-item c-b-box d-dc" style="align-items: center;">
                <!-- <button class="c-button d-dr-jcac" onclick="chooseSupplierPrice('{{item.id}}')"> -->
                <button class="c-button d-dr-jcac" >
                    <img src="/public/static/images/purchase/choose.png" alt="" class="img">
                   <a href="<?php echo url('choose_supp'); ?>">选择供应商</a> 
                </button>
            </div>
        </div>
        {{# }); }}
        {{# if(item.item.length === 0){ }}
        <div class="empty">无数据</div>
        {{# } }}
        <!--<div class="item-body layui-row" >-->
        <!--<div class="layui-col-md3 b-item d-dr-jsb aic" >-->
        <!--<div class="">-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">申请人</div>-->
        <!--<div class="content">{{ item.proposer }}</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">采购部门</div>-->
        <!--<div class="content">-->
        <!--{{ item.proposer }}-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">要求到厂时间</div>-->
        <!--<div class="content">-->
        <!--<p>{{ item.require_time1 }}至</p>-->
        <!--<p>{{ item.require_time2 }}</p>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">报价截至时间</div>-->
        <!--<div class="content">{{ item.expir_time }}</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="line"></div>-->
        <!--</div>-->
        <!--<div class="layui-col-md3 b-item d-dr-jsb aic">-->
        <!--<div class="">-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">材料编号</div>-->
        <!--<div class="content">{{ item.m_num }}</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">材料名称</div>-->
        <!--<div class="content">{{ item.m_name }}</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">规格</div>-->
        <!--<div class="content">{{ item.spec }}</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">数量（单位）</div>-->
        <!--<div class="content">{{ item.num }} {{ item.units }}</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div class="line"></div>-->
        <!--</div>-->
        <!--<div class="layui-col-md3 b-item d-dr-jsb aic">-->
        <!--<div class="">-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">上次价格</div>-->
        <!--<div class="content">-</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">截至送货时间</div>-->
        <!--<div class="content">{{ item.end_time }}</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">验收标准</div>-->
        <!--<div class="content">{{ item.ys_standard }}</div>-->
        <!--</div>-->
        <!--<div class="d-dr item">-->
        <!--<div class="title">备注</div>-->
        <!--<div class="content">{{ item.remark }}</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash;<div class="line"></div>&ndash;&gt;-->
        <!--</div>-->
        <!--<div class="layui-col-md3 b-item c-b-box d-dc-jcac">-->
        <!--<button class="c-button d-dr-jcac" onclick="chooseSupplierPrice('{{item.id}}')">-->
        <!--<img src="/public/static/purchase//images/purchase/choose.png" alt="" class="img">-->
        <!--选择供应商-->
        <!--</button>-->
        <!--</div>-->
        <!--</div>-->
    </div>
    {{#  }); }}
    {{#  if(d.data.length === 0){ }}
    <div class="empty">无数据</div>
    {{#  } }}
</script>
<script type="text/javascript">
    layui.use(['table', 'form', 'laydate', 'laypage', 'laytpl'], function () {
        var laypage = layui.laypage;
        laytpl = layui.laytpl;
        //加载数据
        window.loadPage = function (page = 2, limit = 3) {
            var getTpl = $('#pur_item').html(),
                view = $('#pur_box'),
                type = $('#audit_status').val(),
                pur_num = $('#pur_num').val();
            type = type ? type : 0;
            $.get('<?php echo url("getComfirmData"); ?>', {pur_num, type, page, limit,}, function (res) {
                laytpl(getTpl).render(res.data, function (html) {
                    view.html(html);
                });
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
        //选择供应商报价
        window.chooseSupplier=function(){
            xadmin.open("")
        }
        // window.chooseSupplierPrice = function (pi_id) {
        //     xadmin.open('选择报价', '<?php echo url("show_supp_price"); ?>?pi_id=' + pi_id, 1000, 550);
        // };
        //消息记录
        window.offer_msg_record=function(){
            xadmin.open("消息记录", '<?php echo url("offer_msg_record"); ?>',1078,680)
        }
        loadPage();
        //搜索按钮
        $('#search').click(function () {
            loadPage();
        });
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