<?php /*a:3:{s:55:"E:\TP5.0\purchase\application\admin\view\user\edit.html";i:1620956777;s:59:"E:\TP5.0\purchase\application\admin\view\public\header.html";i:1620956776;s:59:"E:\TP5.0\purchase\application\admin\view\public\footer.html";i:1620956776;}*/ ?>
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
    .layui-input{
        margin-top:4px;
    }
    .layui-form-switch{
        margin-top:4px;
    }
    .layui-input{
        background-color: #eee;
    }
</style>
<body>
<div class="x-body">
    <form class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">用户角色</label>
            <div class="layui-input-inline">
                <select lay-filter="group_id" name="group_id" id='group_id' lay-verify="group_id">
                    <option value=""></option>
                    <?php if(is_array($auth_group) || $auth_group instanceof \think\Collection || $auth_group instanceof \think\Paginator): $i = 0; $__LIST__ = $auth_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo['id']); ?>" <?php if(isset($user['auth']['com_group']) && $vo['id'] == $user['auth']['com_group']): ?> selected <?php endif; ?>><?php echo htmlentities($vo['title']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">辅助角色</label>
            <div class="layui-input-inline">
                <input type="checkbox"  <?php if(isset($user['auth']['assist_group'])): ?> checked value="on" <?php else: ?> value="off" <?php endif; ?> lay-verify="open_assist" id="open_assist" name="open_assist" lay-skin="switch" lay-text="开启|关闭" lay-filter="open_assist">
            </div>
        </div>
        <div class="layui-form-item" id="assist_ele" <?php if(!isset($user['auth']['assist_group'])): ?> style="display: none;" <?php endif; ?>>
            <label class="layui-form-label"></label>
            <div class="layui-input-inline">
                <select name="assist_group_id" lay-verify="assist_group_id" id='assist_group_id' lay-filter="assist_group_id" class="layui-form">
                    <option value=""></option>
                    <?php if(is_array($auth_group) || $auth_group instanceof \think\Collection || $auth_group instanceof \think\Paginator): $i = 0; $__LIST__ = $auth_group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo['id']); ?>" <?php if(isset($user['auth']['assist_group']) && $vo['id'] == $user['auth']['assist_group']): ?> selected <?php endif; ?>><?php echo htmlentities($vo['title']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-inline">
                <input type="text" name="username" value="<?php echo htmlentities($user['username']); ?>" lay-verify="username" autocomplete="off" placeholder="请输入用户名" class="layui-input">
                <input type="hidden" value="<?php echo htmlentities($user['id']); ?>" name="id">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
            <div class="layui-input-inline">
                <input type="text" name="password" lay-verify="password" autocomplete="off" placeholder="空值默认不修改" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">确&nbsp;&nbsp;&nbsp;&nbsp;认</label>
            <div class="layui-input-inline">
                <input type="text" name="comfirm_pass" lay-verify="comfirm_pass" autocomplete="off" placeholder="确认密码" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <div class="layui-input-inline" style="text-align: center;">
                <button class="layui-btn" lay-submit="" lay-filter="edit">提交</button>
                <button class="layui-btn layui-btn-normal" type="reset">重置</button>
            </div>
        </div>
    </form>
</div>
</body>
<script type="text/javascript">
    layui.use(['form'], function(){
        var form = layui.form;

        //监听指定开关
        form.on('switch(open_assist)', function(data){
            if(!this.checked){
                $('#assist_ele').hide();
                $('#assist_group_id').val('');
                form.render('select');
                $('#open_assist').val('off');
                return false;
            }
            $('#open_assist').val('on');
            $('#assist_ele').show();
        });

        form.on('select(assist_group_id)', function(data){
            // console.log(data.elem); //得到select原始DOM对象
            // console.log(data.value); //得到被选中的值
            // console.log(data.othis); //得到美化后的DOM对象
            var value1 = $('#group_id').val();
            if(value1 != '' && value1 == data.value){
                layer.msg('辅助角色和角色相同',{icon:5});
                $('#assist_group_id').val('');
                form.render('select');
            }
            // console.log(value1)
        });

        form.on('select(group_id)', function(data){
            // console.log(data.elem); //得到select原始DOM对象
            // console.log(data.value); //得到被选中的值
            // console.log(data.othis); //得到美化后的DOM对象
            var value1 = $('#assist_group_id').val();
            if(value1 != '' && value1 == data.value){
                layer.msg('辅助角色和角色相同',{icon:5});
                $('#group_id').val('');
                form.render('select');
            }
            // console.log(value1)
        });
        //自定义验证规则
        form.verify({
            username: function(value, item){
                if(value == '') {
                    return '请输入用户名'
                }
                //value：表单的值、item：表单的DOM对象
                if(!new RegExp("^[a-zA-Z0-9_\u4e00-\u9fa5\\s·]+$").test(value)){
                    return '用户名不能有特殊字符';
                }
                if(/(^\_)|(\__)|(\_+$)/.test(value)){
                    return '用户名首尾不能出现下划线\'_\'';
                }
                if(/^\d+\d+\d$/.test(value)){
                    return '用户名不能全为数字';
                }
            }

            //我们既支持上述函数式的方式，也支持下述数组的形式
            //数组的两个值分别代表：[正则匹配、匹配不符时的提示文字]
            ,password: function (value,item) {
                if(value != '' && !/^[\S]{6,12}$/.test(value)){
                    return '密码必须6到12位，且不能出现空格';
                }
            }
            ,comfirm_pass:function (value,item) {
                if($('input[name=password]').val() !== value)
                    return '两次密码输入不一致！';
            }
            ,group_id:function (value) {
                if(value == '') {
                    return '请选择用户权限'
                }
            }
            ,assist_group_id:function (value) {
                //console.log($('#open_assist').val());
                if($('#open_assist').val() == 'on' && value =='') {
                    return '请选择辅助角色'
                }
            }
        });


        //监听提交
        form.on('submit(edit)', function(data){
            // layer.alert(JSON.stringify(data.field), {
            //     title: '最终的提交信息'
            // })
            $.ajax({
                type:'post',
                url:'<?php echo url("edit"); ?>',
                data: data.field,
                dataType:'json',
                success(res){
                    if(res.code == 0){
                        layer.msg(res.msg, {icon:1}, function () {
                            parent.layer.closeAll();
                            parent.layui.table.reload('user');
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
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</html>