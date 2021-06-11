<?php /*a:4:{s:59:"E:\TP5.0\purchase\application\admin\view\user\user_log.html";i:1620956777;s:63:"E:\TP5.0\purchase\application\admin\view\layout\table_base.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\header.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\footer.html";i:1620956776;}*/ ?>
<!doctype html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title id="title1">采购平台管理系统</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/public/static/css/font.css">
    <link rel="stylesheet" href="/public/static/css/xadmin.css">
    <link rel="stylesheet" href="/public/static/css/theme1.css">
    <link rel="stylesheet" href="/public/static/css/formSelects-v4.css">
    <link rel="stylesheet" href="/public/static/iconfont/iconfont.css">
    <script src="/public/static/js/jquery.min.js" charset="utf-8"></script>
    <script src="/public/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/public/static/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.layui-btn{
			background-color: #2F91FC;
			color: #ffffff;
		}
		.layui-form-onswitch{
			background-color: #2F91FC;
			border-color: #2F91FC;
		}
		.layui-laypage .layui-laypage-curr .layui-laypage-em{
			background-color: #2F91FC;
		}
		.layui-form-radio>i:hover, .layui-form-radioed>i {
			color: #2F91FC;
		}
		.layui-form-checked[lay-skin=primary] i{
			background-color: rgba(47,145,252,1);
			border-color: rgba(47,145,252,1);
		}
		.layui-form-checkbox[lay-skin=primary] i:hover{
			border-color: rgba(47,145,252,1);
		}
		
		input.layui-input:focus{
			border-color:  #2F91FC !important;
		}
		.layui-form-select dl dd.layui-this{
			background-color:  #2F91FC;
		}
		.layui-form-item .layui-input-inline {
			margin-right: 15px;
		}
		.item{
			margin-bottom: 5px;
		}
		a{
			color: #2F91FC;
			cursor: pointer;
		}
        .layui-table-cell{
            font-size: 13px !important;
        }
        .layui-laydate .layui-this{
            background-color: #2F91FC !important;
        }
	</style>
    <script>
        // 是否开启刷新记忆tab功能

    </script>
    <style type="text/css">
        body{
            background: #ffffff;
        }
    </style>
</head>
<link rel="stylesheet" href="/public/static/css/tableBase.css">
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
    .search-label{
        /*margin-right: 5px;*/
        font-size: 14px;
    }
</style>
<body>
<div class="x-body">
    
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>系统日志</legend>
</fieldset>

    
<form class="layui-form" action="#">
    <div class="item">
        <label for="typeid">日志类型：</label>
        <div class="layui-input-inline">
            <select id="typeid">
                <option value="">全部类型</option>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($t['id']); ?>"><?php echo htmlentities($t['logtype']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="item">
        <label for="username">操作用户：</label>
        <div class="layui-input-inline">
            <input type="text" id="username" placeholder="请输入操作用户" autocomplete="off"
                   class="layui-input">
        </div>
    </div>
    <div class="item">
        <label for="beforeTime">起始时间：</label>
        <div class="layui-input-inline">
            <input type="text" id="beforeTime" placeholder="请选择起始时间" autocomplete="off"
                   class="layui-input">
        </div>
    </div>
    <div class="item">
        <label for="endTime">结束时间：</label>
        <div class="layui-input-inline">
            <input type="text" id="endTime" placeholder="请选择结束时间" autocomplete="off"
                   class="layui-input">
        </div>
    </div>
    <button type="button" style="width: 50px;" id="search" class="layui-btn layui-btn-sm layui-btn-normal" data-type="reload">
        <i class="layui-icon">&#xe615;</i>
    </button>
    <div style="position: absolute;right: 50px;">
        <a href="javascript:location.reload();" style="width: 50px;" class="layui-btn layui-btn-sm layui-btn-primary">
            <i class="layui-icon">&#xe669;</i>
        </a>
    </div>
</form>

    
    <table id="table_ele" lay-filter="table_ele"></table>
    
    <script type="text/html" id="toolbar">
    
        <div class="layui-btn-container">
            <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
            <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
            <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
        </div>
    
    </script>
    <script type="text/html" id="table_bar">
        
<a lay-event="show">详情</a>
<a lay-event="del">删除</a>

    </script>
</div>

<script type="text/javascript">
    layui.use(['table', 'form','layer','laydate'], function () {
        var table = layui.table
            ,$ = layui.jquery
            ,layer = layui.layer
            ,laydate = layui.laydate
            , form = layui.form;
        laydate.render({
            elem: '#beforeTime'
            ,type: 'datetime'
            ,value: '<?php echo date("Y-m-d"); ?>' + ' 00:00:00'
        });
        laydate.render({
            elem: '#endTime'
            ,type: 'datetime'
            ,value:new Date()
        });

        table.render({
            elem: '#table_ele'
            , url: '<?php echo url("logData"); ?>'
            , defaultToolbar: ['filter', 'exports', 'print']
            , limit: 15
            , limits: [15, 30, 60, 90]
            , loading: true
            ,toolbar:false
            , title: '系统日志'
            , cols: [[
                {align:'center',field: 'username', title: '操作人', width: 120, fixed: 'left', unresize: true}
                , {align:'center',field: 'logtype', title: '日志类型', width: 120}
                , {align:'center',field: 'action', title: '操作事件', width: 120}
                , {align:'center',field: 'content', title: '操作内容', width: 390}
                , {align:'center',field: 'ip', title: 'IP地址', width: 155}
                , {align:'center',field: 'create_time', title: '操作时间', width: 160,fixed: 'right', sort: true}
                , {fixed: 'right', title: '操作', align: 'center', toolbar: '#table_bar', width: 125}
            ]]
            , page: true
            ,id : 'log'
        });

        table.on('tool(table_ele)',function (obj) {
            var data = obj.data;
            if (obj.event==='del'){
                layer.confirm('确认删除（'+data.username+'）的这条日志吗？',{title:'警告',icon:3},function () {
                    $.post('<?php echo url("logDel"); ?>',{id:data.id},function (res) {
                        if (res.code>0){
                            layer.msg(res.msg,{icon:2});
                        }else{
                            layer.msg(res.msg,{icon:1});
                            setTimeout(function(){window.location.reload();},1000);
                        }
                    });
                });
            }else if (obj.event==='show'){
                layer.open({
                    type: 1,
                    title:['日志详情','background-color:#2F91FC;color:white;'],
                    skin: 'layui-skin', 
                    anim:2,
                    shadeClose: true, 
                    content: data.content
                });
            }
        });

        $('#search').click(function (){
            //执行重载
            table.reload('log', {
                page: {
                    curr: 1 //重新从第 1 页开始
                }
                , where: {
                    username:$('#username').val(),
                    typeid:$('#typeid').val(),
                    beforeTime:$('#beforeTime').val(),
                    endTime:$('#endTime').val()
                }
            });
        });
    });
</script>
<style>
    .layui-skin{
        width: 250px;
        height: 400px;
        border-radius: 5px;
        border: 3px solid #2F91FC;
    }
</style>

</body>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</html>