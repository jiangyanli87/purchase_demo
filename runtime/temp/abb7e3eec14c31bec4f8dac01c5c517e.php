<?php /*a:4:{s:66:"E:\TP5.0\purchase\application\purchase\view\index\choose_supp.html";i:1623766681;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
<div class="layui-breadcrumb bread" style=" margin-top: 15px;margin-bottom: 13px;">
    <span style="font-size: 18px;">当前位置: &nbsp;</span>
    <a href="<?php echo url('admin/index/home'); ?>">首页</a>
    <a href="#">报价管理</a>
    <a href="<?php echo url('comfirm'); ?>">报价确认</a>
    <a><cite>选择供应商报价</cite></a>
</div>

    
<style>
    .data .title {
        display: flex;
        flex-direction: row;
        margin-bottom: 20px;
    }

    .data .title span {
        font-size: 16px;
        font-family: Microsoft YaHei;
        font-weight: bold;
        color: #333333;
        line-height: 10px;
        margin-left: 10px;
        margin-top: 3px;
    }

    .data .title_lg {
        width: 4px;
        height: 16px;
        background: #086DF3;
    }

    .data_cont {
        display: flex;
        /* flex-direction: row; */
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .data_cont .content {
        display: flex;
        flex-direction: row;
    }

    .data_cont .content .data_dat {
        margin-top: 9px;
        margin-left: 13px;
    }

    .data_cont .content .data_dat p {
        font-size: 24px;
        font-family: Microsoft YaHei;
        font-weight: bold;
        color: #333333;
        line-height: 10px;
        margin-bottom: 15px;
    }

    .data_cont .content .data_dat span {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #999999;
        line-height: 10px;
    }

    .data_cont .sep_line {
        width: 1px;
        height: 52px;
        background: #E6E6E6;

    }

    .msg_det .det_title {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #666666;
        line-height: 10px;
        margin-right: 41px;
    }

    .msg_det .det_cont {
        font-size: 14px;
        font-family: Microsoft YaHei;
        font-weight: 400;
        color: #333333;
        line-height: 10px;
    }

    .msg_det div {
        margin-bottom: 15px;
    }

    .demander {
        display: flex;
        flex-direction: row;
        margin-bottom: 25px;
        /* justify-content: space-between; */
    }
    .layui-body{
min-width:1080px !important;
}
/* .layui-table-cell,layui-table-tool-panel li{
height:auto;
overflow:visible;
text-overflow:inherit;
white-space:normal;
padding:0px 5px !important;
/* line-height:24px; 
} */

   /* .layui-table-box{
overflow:visible !important;

} */

/* .layui-table-body{
overflow:visible !important;

} */

.layui-table-cell{
    overflow:visible !important;
} 
    .layui-table-col-special>.layui-table-cell .laytable-cell-1-0-8 {
        /* overflow: visible !important; */
    }
</style>
<!-- 数据信息 -->
<div class="data">
    <div class="title" style="margin-top: 20px;">
        <div class="title_lg"></div>
        <span>数据信息</span>
    </div>
    <div class="data_cont">
        <!-- <div class="sep_line"></div> -->
        <!-- <div class="content">
            <img src="/public/static/images/icon/supp.png" alt="">
            <div class="data_dat">
                <p>3000</p>
                <span>采购需求数量</span>
            </div>
        </div>-->
        <!-- <div class="sep_line"></div> -->
    </div>
    <!-- <div class="sep_line"></div> -->
</div>
<!-- 需方信息 -->
<div class="data ">
    <div class="title">
        <div class="title_lg"></div>
        <span>需方信息</span>
    </div>
    <div class="demander">
        <div class="msg_det">
            <div>
                <span class="det_title" style="margin-right: 56px;">流水号</span><span class="det_cont"
                    style=''>16590</span>
            </div>
            <div><span class="det_title">公司名称</span><span class="det_cont">息县金宏商砼</span></div>
            <div><span class="det_title">物资名称</span><span class="det_cont">石子</span></div>
            <div> <span class="det_title">物资规格</span><span class="det_cont">10-20mm碎石</span></div>
        </div>
        <div class="msg_det" style="margin : 0 130px;">
            <div> <span class="det_title" style="margin-right: 56px;">物料编码</span><span class="det_cont"
                    style=''>16590</span> </div>
            <div> <span class="det_title">数量（单位）</span><span class="det_cont">息县金宏商砼</span></div>
            <div> <span class="det_title">验收标准</span><span class="det_cont">石子</span></div>
            <div> <span class="det_title">采购备注</span><span class="det_cont">10-20mm碎石</span></div>
        </div>
        <div class="msg_det">
            <div> <span class="det_title" style="margin-right: 56px;">需求发布时间</span><span class="det_cont"
                    style=''>16590</span></div>
            <div><span class="det_title">报价截止时间</span><span class="det_cont">息县金宏商砼</span></div>
            <div><span class="det_title">截止送货时间</span><span class="det_cont">石子</span></div>
            <div><span class="det_title">要求到厂时间</span><span class="det_cont">10-20mm碎石</span></div>
        </div>
    </div>

</div>
<!-- 需方信息 -->
<div class="data ">
    <div class="title" style="margin-bottom: 10px;">
        <div class="title_lg"></div>
        <span>选择供应商报价</span>
    </div>
</div>
<script>
    (function () {
        var html = '';
        $.ajax({
            url: '/public/static/js/supp_data.json',
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                console.log(res)
                for (var i = 0; i < res.data.length; i++) {
                    html += `<div class="content">
          <img src="` + res.data[i].img + `"alt="">
          <div class="data_dat">
            <p> `+ res.data[i].num + `</p>
             <span> `+ res.data[i].intor + `</span>
         </div>      
</div> 
<div class="sep_line"></div>`
                }
                $('.data_cont').append(html);
            }
        })
    }())
    $(document).ready(function () {
        $(".data_cont .sep_line:last").hide()
    })
</script>

    
    <table id="table_ele" lay-filter="table_ele" style="flex: 1;"></table>
    
    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>

    </script>
    <script type="text/html" id="table_bar">
        
{{# if(d.audit_status.value === 0){ }}
<img lay-event="choose_quote" src="/public/static/images/icon/chose.png" style="margin-top: -4px;width: 12px;" alt="">
<a lay-event="choose_quote" style="margin-left: -8px;">选择报价</a>
<img lay-event="cel_qualification" src="/public/static/images/icon/cancel.png" style="margin-top: -4px;width: 12px;"
    alt="">
<a lay-event="cel_qualification" style="margin-left: -8px;">取消资格</a>

{{# } else { }}
<img class=" layui-disabled" lay-event="choose_quote" src="/public/static/images/icon/no_chose.png"
    style="margin-top: -4px;width: 12px;" alt="">
<a class=" layui-disabled" lay-event="choose_quote" style="margin-left: -8px;">选择报价</a>
<img class=" layui-disabled" lay-event="cel_qualification" src="/public/static/images/icon/no_cancel.png"
    style="margin-top: -4px;width: 12px;" alt="">
<a class=" layui-disabled" lay-event="cel_qualification" style="margin-left: -8px;">取消资格</a>

{{# } }}
<!-- <img lay-event="del" src="/public/static/images/icon/more.png" style="margin-top: -3px;" alt="">
    <a  lay-event="del" style="margin-left: -8px;" >更多</a>        
            -->
<div id="more" style="float: right;position: relative !important;top:0px;right: 6px;" lay-event="more"
    onmouseover="moreShowFunc('{{d.id}}', '{{d.supp_name}}')" onmouseout="moreHideFunc('{{d.id}}', '{{d.supp_name}}')">
    <div>
        <img src="/public/static/images/icon/more.png" style="margin-top: -3px;" alt="">
        <a style="margin-left: -10px;">更多</a>
    </div>
    <div class="pic more_ele" id="more_{{d.id}}"
        style="display: none;position:absolute; background: url(/public/static/images/icon/more_serial.png); width: 113px;height: 89px;right: -17px;z-index: 999999 !important;">
        <div class="binding" style="cursor: pointer;margin-top: 13px;" lay-event="reject">
            <img src="/public/static/images/icon/back1.png" style="margin-top: -3px;margin-right: 2px;" alt="">
            <span style="color: #fff;opacity: .6;">驳回报价</span>
        </div>
        <div class="detial" lay-event='history_quote' style="cursor: pointer;margin-top: 3px;">
            <img src="/public/static/images/icon/history1.png" style="margin-top: -3px;margin-right: 2px;" alt="">
            <span style="color: #fff;opacity: .6;">历史报价</span>
        </div>
    </div>
</div>


    </script>
</div>


<script type="text/javascript">
$(function(){
    $(window).on("scroll",function(){
        var value=$('#table_ele').scrollLeft();
             if(value>300){
               console.log(123)
             }
    })
 
})

 window.moreShowFunc = function (id, name) {
   $(".more").css("right",'20px')
            // $(".more").parents(".layui-table-cell").css('width','100px')
            $('#more_' + id).toggle();

            console.log(123)
            eles = document.getElementsByClassName('more_ele');
            // console.log(eles);
            for (var i in eles) {
                if (typeof (i) !== Number) continue;
                if ($(eles[i]).id !== '#more_' + id) eles[i].hide();
                // console.log($('.more_ele'))
            }
        }

        window.moreHideFunc = function (id, name) {
            $('#more_' + id).toggle();
            // console.log($('div .more_ele'))
            // eles = document.getElementsByClassName('more_ele');
            // console.log(eles);
            // for(var i in  eles){
            //     console.log($('.more_ele'))
            //     if(typeof(i) !== Number) continue;
            //     if($(eles[i]).id !== '#more_'+ id)  eles[i].hide();
            //     console.log($('.more_ele'))
            // }
        }

    layui.use('table', function () {
        var table = layui.table;
        table.render({
            elem: '#table_ele'
            , url: '<?php echo url("getNeedList"); ?>'
            // , toolbar: '#toolbar' //开启头部工具栏，并为其绑定左侧模板
            , defaultToolbar: ['filter', 'exports', 'print'
                //     , { //自定义头部工具栏右侧图标。如无需自定义，去除该参数即可
                //     title: '提示'
                //     ,layEvent: 'LAYTABLE_TIPS'
                //     ,icon: 'layui-icon-tips'
                // }
            ]
            , limit: 10
            , limits: [10, 15, 20]
            // , height: 700
            , loading: true
            , title: '采购需求列表'
            ,width:1300
            , cols: [[
                {  field: 'id', title: '供应商名称', width: "8%", unresize: true, sort: true },
                { field: 'pur_num', title: '可供数量', width: "7%", align: 'center' }
                , { field: 'proposer', title: '单位', width: "6%", align: 'center' },
                { field: "uid", title: '靠港价格', width: "7%", align: 'center' }
                , { field: 'material_id', title: '进站价格', width: "7%", align: 'center' }
                , { field: 'c_name', title: '结算方式', width: "7%", },
                { field: "uid", title: '账期', width: "6%", align: 'center' },
                { field: "uid", title: '产地', width: "6%", align: 'center' }
                , { field: 'expir_time', title: '承诺供货时间', width: "13%", align: 'center' }
                , { field: 'c_name', title: '报价类型', width: "7%", }
                , {
                    field: 'audit_status', title: '选择类型', width: "7%", align: 'center', templet(d) {
                      
                        return d.audit_status.s_handle; }
                          // if (d.audit_status.text=="未审核") return '<span style="color:#F37108">未审核</span>';
                        // if (d.audit_status.text=="已审核") return '<span style="color:#17AE10">已通过</span>';
                        // if (d.audit_status.text=="未通过") return '<span style="color:#F30808">未通过</span>';
                   
                }
                , { field: "uid", title: '已选数量', width: "7%", align: 'center' }
                , { field: 'add_info', title: '未选择低价说明', width: "10%", align: 'center' }
                , { field: 'add_info', title: '备注', align: 'center' }
                , {  title: '操作', align: 'center', toolbar: '#table_bar', width: "20%" }
            ]]
            , page: true
            , id: 'purList'
            , done: function (res, curr, count) {
                $("table").css("width", "100%");
            }

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
                layer.confirm('真的删除采购单：' + data.pur_num, { title: '警告', icon: 3 }, function (index) {
                    $.ajax({
                        type: 'get',
                        url: '<?php echo url("del_need"); ?>',
                        data: { p_id: data.id },
                        dataType: 'json',
                        success(res) {
                            if (res.code == 0) {
                                obj.del();
                                layer.close(index);
                            }
                            layer.msg(res.msg)
                        }
                    });

                });
            } else if (obj.event === 'check') {
                xadmin.open('审核', '<?php echo url("audit_need"); ?>', 460, 460)

            } else if (obj.event === 'tem_record') {
                xadmin.open('模板记录', '<?php echo url("sendwxmsg_list"); ?>', 460, 460)
            }
            else if (obj.event === 'choose_quote') {

                xadmin.open('选择报价', '<?php echo url("choose_quote"); ?>?p_id=' + data.id, 608, 498)
            }
            else if (obj.event === 'cel_qualification') {

                xadmin.open('取消资格', '<?php echo url("cel_qualification"); ?>?p_id=' + data.id, 592, 398)
            }
            else if (obj.event === 'more') {

                var select = [];
                function detail(index) {
                    var select = [];
                    select.push(index)
                    console.log(select.indexOf(index))
                }
                detail(1)

                // $(".pic").toggle()

            }
            else if (obj.event === 'reject') {
                xadmin.open('驳回报价', '<?php echo url("reject"); ?>?mid=' + data.id, 592, 398)
            }
            else if (obj.event === 'history_quote') {
                xadmin.open('历史报价', '<?php echo url("history_quote"); ?>', 606, 434)
            }
        });
       
       
        var $ = layui.$, active = {
            reload: function () {
                var search_key = $('#search_key').val();
                var search_val = $('#search_val').val();
                if (search_key == '') {
                    layer.msg('请选择搜索类型', { icon: 5 });
                    return false;
                }
                if (search_val == '') {
                    layer.msg('请输入搜索内容', { icon: 5 });
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
        $('#add').click(function () {
            xadmin.open('发布采购需求', '<?php echo url("add_need"); ?>', 910, 575)
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