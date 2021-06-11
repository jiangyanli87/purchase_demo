<?php /*a:4:{s:64:"E:\TP5.0\purchase\application\purchase\view\supplier\s_list.html";i:1623382681;s:66:"E:\TP5.0\purchase\application\purchase\view\layout\table_base.html";i:1622876892;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
    <legend>采购材料1</legend>
 
</fieldset> -->
<div class="layui-breadcrumb bread" style=" margin-top: 15px;margin-bottom: 13px;" >
    <span style="font-size: 18px;">当前位置: &nbsp;</span>
    <a href="#">首页</a>
    <a href="#">供应商管理</a>
    <!-- <a href="">亚太地区</a> -->
    <a><cite>供应商信息维护</cite></a>
  </div>  

    

<form class="layui-form" action="#" style="margin-top: 20px;">
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
    <button type="button" style="width: 50px;" id="search" class="layui-btn layui-btn-sm " data-type="reload">
        <i class="layui-icon">&#xe615;</i>
    </button>
    <button type="button" style="width: 50px;" id="add" class="layui-btn layui-btn-sm ">
        <i class="layui-icon">&#xe654;</i>
    </button>
    <!-- <div style="position: absolute;right: 50px;">
        <a href="javascript:location.reload();" style="width: 50px;" class="layui-btn layui-btn-sm ">
            <i class="layui-icon">&#xe669;</i>
        </a>
    </div> -->
</form>


    
    <table id="table_ele" lay-filter="table_ele" style="flex: 1;"></table>
    
    <script type="text/html" id="toolbar">
    
<div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-event="getCheckData">批量删除</button>
</div>


    </script>
    <script type="text/html" id="table_bar">
        
<img  src="/public/static/images/icon/edit.png"  style="margin-top: -3px;"alt="">
<a  lay-event="edit" style="margin-left: -10px;"> 编辑</a>
<img src="/public/static/images/icon/del.png" style="margin-top: -3px;" alt="">
<a  lay-event="del" style="margin-left: -10px;">删除</a>
<div id="more" style="float: right;position: relative;top:0;right: 31px;"  lay-event="more"  onmouseover="moreShowFunc('{{d.id}}', '{{d.supp_name}}')" onmouseout="moreHideFunc('{{d.id}}', '{{d.supp_name}}')">
    <div >
        <img src="/public/static/images/icon/more.png" style="margin-top: -3px;" alt="">
        <a style="margin-left: -10px;">更多</a>
    </div>
    <div class="pic more_ele" id="more_{{d.id}}" style="display: none; position: absolute;background: url(/public/static/images/icon/more_serial.png); width: 113px;height: 89px;right: -24px; z-index: 99999 !important" >
        <div class="binding" style="cursor: pointer;margin-top: 13px;" lay-event="binding">
            <img src="/public/static/images/icon/binding.png" style="margin-top: -3px;margin-right: 2px;" alt="">
            <span style="color: #fff;opacity: .6;">供货绑定</span>
        </div>
        <div class="detial" lay-event='detial' style="cursor: pointer;margin-top: 3px;">
            <img src="/public/static/images/icon/detial.png"  style="margin-top: -3px;margin-right: 2px;" alt="">
            <span style="color: #fff;opacity: .6;">供货明细</span>
        </div>
    </div>
</div>

    </script>
</div>

<style>
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

   .layui-table-box{
overflow:visible !important;

}

.layui-table-body{
overflow:visible !important;

}

.layui-table-cell{
    overflow:visible !important;
} 
.layui-table-col-special> .layui-table-cell .laytable-cell-1-0-8{
    /* overflow: visible !important; */
}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $(".layui-table-body").find("td").each(function (index, element) {
                        if ($(this).attr("data-field") >= 0) {
                            $(this).css("display", "none");
                        }
                    })
// alert(123)
    $("#more").click(function(){
       
    })
    // $(".layui-table-header").find(".layui-table-col-special").click(function(){
    //     alert(123)
    // })
 
})
    layui.use('table', function () {
        var table = layui.table;
        table.render({
            elem: '#table_ele'
            , url: '<?php echo url("listData"); ?>'
            , limit: 10
            , limits: [10,15,20]
            , loading: true
            , title: '材料列表'
            , cols: [[
                {field: 'id', title: '序号',align:"center", width: '10%',   unresize: true, sort: true}
                , {field: 'username', title: '登录账号',align:"center",width: '10%',}
                , {field: 'password', title: '登录密码',align:"center", width:'11%',style:"overflow:hidden"}
                , {field: 'supp_name', title: '单位全称', align:"center",width: '10%'}
                , {field: 'openid', title: '单位简称',align:"center", width: '10%'}
                , {field: 'remark', title: '单位税号',align:"center", width:'10%'}
                , {field: 'conn_man', title: '联系人',align:"center", width: '10%'}
                , {field: 'conn_phone', title: '联系电话',align:"center", width: '10%'}
                , { title: '操作', align: 'center', toolbar: '#table_bar',align:"center", width: '20%'}
            ]]
            , page: true
            ,id : 'materList',
            // done:$(".layui-table-body").find("td").each(function (index, element) {
            //             if ($(this).attr("data-field") <= 0) {
            //                 $(this).css("display", "none");
            //             }
            //         })
//             done: function (res, curr, count){
// $("table").css("width", "100%");
// //这里设置表格的宽度为100%
// },
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
            // console.log(data)
            if (obj.event === 'del') {
                layer.confirm('真的删除材料：'+ data.conn_man + '，规格：' + data.supp_name ,{title:'警告',icon:3}, function (index) {
                    $.ajax({
                        type:'get',
                        url:'<?php echo url("delRule"); ?>',
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
                console.log(data.id)
                xadmin.open('编辑材料','<?php echo url("edit_material"); ?>?mid='+data.id,592,400)
            }
            else if(obj.event ==='more'){
                // $('#more_'+ data.id).toggle();
                // console.log($('div .more_ele'))
                // eles = document.getElementsByClassName('more_ele');
                // console.log(eles);
                // for(var i in  eles){
                //     console.log($('.more_ele'))
                //     if(typeof(i) !== Number) continue;
                //     if($(eles[i]).id !== '#more_'+ data.id)  eles[i].hide();
                //     console.log($('.more_ele'))
                // }
                // console.log($(this))  
                // console.log(data)
                var select=[];
                function detail(index){
                    var select=[];
                    select.push(index)
                    console.log(select.indexOf(index))
                }
                detail(1)
                
                // $(".pic").toggle()

            }
            else if(obj.event==='binding'){
                xadmin.open('供货绑定','<?php echo url("binding"); ?>?mid='+data.id,592)
            }
            else if(obj.event==='detial'){
                xadmin.open('供货明细','<?php echo url("supplier_detail"); ?>',938,552)
            }
        });
        window.moreShowFunc = function(id,name){
            $(".more").parents(".layui-table-cell").css('width','100px')
            $('#more_'+ id).toggle();
                // console.log($('div .more_ele'))
                eles = document.getElementsByClassName('more_ele');
                // console.log(eles);
                for(var i in  eles){
                    // console.log($('.more_ele'))
                    if(typeof(i) !== Number) continue;
                    if($(eles[i]).id !== '#more_'+ id)  eles[i].hide();
                    // console.log($('.more_ele'))
                }
        }

        window.moreHideFunc = function(id,name){
            $('#more_'+ id).toggle();
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
            xadmin.open('添加','<?php echo url("add_material"); ?>',592,350);
            $("div")
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