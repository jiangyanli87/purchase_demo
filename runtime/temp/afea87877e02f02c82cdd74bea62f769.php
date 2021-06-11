<?php /*a:3:{s:70:"E:\TP5.0\purchase\application\purchase\view\supplier\add_material.html";i:1622703180;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>

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
<style type="text/css">
    .layui-form-mid{
        padding: 4px !important;
        
    }
    .add_login{display: flex;
        justify-content: space-around;
    }
    .login_left{
        margin-left:-51px;
    }
    .login_right{
        margin-left:-34px;
    }
    .layui-form-label{
       
        padding:11px 15px !important;
        font-size: 14px;
font-family: Microsoft YaHei;
font-weight: 400;
color: #666666;
line-height: 10px;
    }
    .layui-input-inline input{
        height: 27px;
        /* background-color: aliceblue; */
    }
    .layui-input-inline .layui-input{
        background-color: #fff;
        /* border: #666666; */
        height: 30px;
        width: 160px;
    }
    .layui-form-item{
        margin-bottom: 20px;
    }
</style>
<body>
<div class="x-body" onbeforeunload="return myFunction()">
    <form class="layui-form">
        <div class="layui-form-item"  style="display: flex;padding-top:27px">
            <div class="add_login login_left">
                <label class="layui-form-label">登录账号</label>
                <div class="layui-input-inline">
                    <input type="text" name="username" class="layui-input">
                    <!-- <select lay-filter="pid" name="pid" id='pid' lay-verify="required" lay-search>
                        <option value="0">顶级菜单</option>
                    
                    </select> -->
                    
                </div>
            </div>
            <div class="add_login login_right">
                <label class="layui-form-label">登录密码</label>
                <div class="layui-input-inline">
                    <input type="text" name="password" class="layui-input">
                    <!-- <select lay-filter="pid" name="pid" id='pid' lay-verify="required" lay-search>
                        <option value="0">顶级菜单</option>
                    
                    </select> -->
                    
                </div>
            </div>
  
        </div>
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-inline">
                <input type="checkbox" value="1" checked lay-verify="status" id="status" name="status" lay-skin="switch" lay-text="显示|隐藏" lay-filter="status">
            </div>
        </div> -->
        <div class="layui-form-item">
            <label class="layui-form-label" style="margin-left: -51px;">单位全称</label>
            <div class="layui-input-inline">
                <input type="text" name="supp_name" lay-verify="required" autocomplete="off" class="layui-input" style="width: 441px;">
            </div>
        </div>
        <div class="layui-form-item"  style="display: flex;">
            <div class="add_login login_left">
                <label class="layui-form-label">单位简称</label>
                <div class="layui-input-inline">
                    <input type="text" name="openid" class="layui-input">
                    <!-- <select lay-filter="pid" name="pid" id='pid' lay-verify="required" lay-search>
                        <option value="0">顶级菜单</option>
                    
                    </select> -->
                    
                </div>
            </div>
            <div class="add_login login_right">
                <label class="layui-form-label">单位税号</label>
                <div class="layui-input-inline">
                    <input type="text" name="remark" class="layui-input">
                    <!-- <select lay-filter="pid" name="pid" id='pid' lay-verify="required" lay-search>
                        <option value="0">顶级菜单</option>
                    
                    </select> -->
                    
                </div>
            </div>
  
        </div>
        <div class="layui-form-item"  style="display: flex;">
            <div class="add_login login_left">
                <label class="layui-form-label">联系人</label>
                <div class="layui-input-inline">
                    <input type="text" name="conn_man" class="layui-input">
                    <!-- <select lay-filter="pid" name="pid" id='pid' lay-verify="required" lay-search>
                        <option value="0">顶级菜单</option>
                    
                    </select> -->
                    
                </div>
            </div>
            <div class="add_login login_right">
                <label class="layui-form-label">联系电话</label>
                <div class="layui-input-inline">
                    <input type="text" name="conn_phone" class="layui-input">
                    <!-- <select lay-filter="pid" name="pid" id='pid' lay-verify="required" lay-search>
                        <option value="0">顶级菜单</option>
                    
                    </select> -->
                    
                </div>
            </div>
  
        </div>
        <!-- <div class="layui-form-item">
            <label class="layui-form-label">访问路由</label>
            <div class="layui-input-inline">
                <input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="请输入访问路由" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">图标</label>
            <div class="layui-input-inline">
                <input type="text" name="icon" lay-verify="icon" autocomplete="off" placeholder="请输入图标" class="layui-input">
            </div> -->
            <!--<div class="layui-form-mid layui-word-aux" title="点击查看图标" style="cursor: pointer;"><a href="//public/static/purchase//iconfont/dome.html" target="_blank">查看图标</a></div>-->
        <!-- </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排序</label>
            <div class="layui-input-inline">
                <input type="number" name="sort" lay-verify="required" autocomplete="off" placeholder="请输入排序参数" class="layui-input">
            </div>
        </div> -->
        <div class="layui-form-item" style="float: right;margin-right: -64px;">
            <label class="layui-form-label"></label>
            <div class="layui-input-inline" style="text-align: center;">
                <button  class="layui-btn layui-btn-normal close" type="button"  style="background-color: #fff;color: #333;border: #666666 solid 1px;">取消</button>
                <button type="button" class="layui-btn" lay-submit="" lay-filter="add" >确定</button>
              
            </div>
        </div>
    </form>
</div>
</body>
<script type="text/javascript">
$(".close").click(function(){
 xadmin.close()
})
    layui.use(['form'], function(){
        var form = layui.form;
        //监听提交
        form.on('submit(add)', function(data){
            // layer.alert(JSON.stringify(data.field), {
            //     title: '最终的提交信息'
            // })
            $.ajax({
                type:'post',
                url:'<?php echo url("addRule"); ?>',
                data: data.field,
                dataType:'json',
                success(res){
                    if(res.code == 0){
                        layer.msg(res.msg, {icon:1}, function () {
                            parent.layer.closeAll();
                            parent.layui.table.reload('materList');
                        });
                        return false;
                    }
                    layer.msg(res.msg, {icon:2});
                }
            });
            return false;
        });
    })
</script>
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