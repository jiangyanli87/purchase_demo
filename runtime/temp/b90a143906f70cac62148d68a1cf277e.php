<?php /*a:3:{s:55:"E:\TP5.0\purchase\application\admin\view\auth\auth.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\header.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\footer.html";i:1620956776;}*/ ?>
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
<style type="text/css">
    .layui-tree-icon{
        width: 15px;
        height: 15px;
        line-height: 16px;
    }
</style>
<body>
    <div class="x-body">
        <div class="layui-btn-container">
            <input type="hidden" name="id" id="role_id" value="<?php echo htmlentities($role['id']); ?>">
            <button type="button" class="layui-btn layui-btn-sm" lay-demo="getChecked">提交</button>
            <!--<button type="button" class="layui-btn layui-btn-sm" lay-demo="setChecked">勾选指定节点</button>-->
            <button type="button" class="layui-btn layui-btn-sm" lay-demo="reload">重置权限</button>
        </div>
        <div id="auth_list" class="demo-tree-more"></div>
    </div>
</body>
<script type="text/javascript">
    layui.use(['tree', 'util'], function() {
        var tree = layui.tree
            , layer = layui.layer
            , util = layui.util;
        $.ajax({
            type:'post',
            url:'<?php echo url("getAuth",['rules' => $role['rules']]); ?>',
            dataType:'json',
            async: true,
            success(res) {
                var data = res.data;
                //console.log(data.tree);
                var treeEle = tree.render({
                    elem: '#auth_list'
                    , data: data.tree
                    , showCheckbox: true  //是否显示复选框
                    , id: 'auth_tree'
                    , isAssign: true
                    // ,isJump: true //是否允许点击节点时弹出新窗口跳转
                    // ,click: function(obj){
                    //     var data = obj.data;  //获取当前点击的节点数据
                    //     layer.msg('状态：'+ obj.state + '<br>节点数据：' + JSON.stringify(data));
                    // }
                });
                //赋值之后切换状态
                treeEle.config.isAssign = false;
                // console.log();
            }
        });
        //开启复选框
        //基本演示
        // console.log(data);
        // setParentsChecked(elem);
        //按钮事件
        util.event('lay-demo', {
            getChecked: function(othis){
                var checkedData = tree.getChecked('auth_tree'); //获取选中节点的数据
                if(checkedData.length <= 0){
                    layer.msg('请勾选权限',{icon:2});
                    return false;
                }
                var id = $('#role_id').val();
                var index = layer.confirm('确认授权!',{icon:3,title:'提示'},function () {
                    $.ajax({
                        type:'post',
                        url:'<?php echo url("authToRole"); ?>',
                        data:{auth_list:checkedData,id:id},
                        success(res){
                            if(res.code == 0){
                                layer.msg(res.msg, {icon:1}, function () {
                                    parent.layer.closeAll();
                                    parent.layui.table.reload('user');
                                });
                                return false;
                            }
                            layer.msg(res.msg, {icon:2});
                        },
                        error() {
                            layer.msg('网络错误')
                        }
                    });
                    layer.close(index);
                });

            }
            ,setChecked: function(){
                tree.setChecked('auth_tree', [12, 16]); //勾选指定节点
            }
            ,reload: function(){
                //重载实例
                tree.reload('auth_tree', {

                });

            }
        });

    });
</script>
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