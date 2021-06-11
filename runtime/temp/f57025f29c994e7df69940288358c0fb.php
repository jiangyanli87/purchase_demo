<?php /*a:3:{s:71:"E:\TP5.0\purchase\application\purchase\view\material\edit_material.html";i:1620956778;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1621998246;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>
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
	<link rel="stylesheet" href="/public/static/purchase/css/supplier.css">
    <link rel="stylesheet" href="/public/static/purchase/css/formSelects-v4.css">
	<link rel="stylesheet" href="/public/static/layui-v2.6.6/layui/css/layui.css">
    <link rel="stylesheet" href="/public/static/purchase//iconfont/iconfont.css">
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
</style>
<body>
<div class="x-body">
    <form class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">所属站点</label>
            <div class="layui-input-inline">
                <select lay-filter="station_name" name="station_name" id='pid' lay-verify="required" lay-search>
                    <?php if(is_array($station) || $station instanceof \think\Collection || $station instanceof \think\Paginator): $i = 0; $__LIST__ = $station;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option <?php if($material['station_name']==$vo): ?> selected <?php endif; ?> value="<?php echo htmlentities($vo); ?>"><?php echo htmlentities($vo); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">材料大类</label>
            <div class="layui-input-inline">
                <select lay-filter="cid" name="cid" id='cid' lay-verify="required" lay-search>
                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($material['cid']==$vo['id']): ?> selected <?php endif; ?>><?php echo htmlentities($vo['c_name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">材料名称</label>
            <div class="layui-input-inline">
                <input type="text" name="m_name"  value="<?php echo htmlentities($material['m_name']); ?>" lay-verify="required" autocomplete="off" placeholder="请输入分类名称" class="layui-input">
                <input type="hidden" name="mid" value="<?php echo htmlentities($material['id']); ?>">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">材料规格</label>
            <div class="layui-input-inline">
                <input type="text" name="spec" value="<?php echo htmlentities($material['spec']); ?>" lay-verify="required" autocomplete="off" placeholder="请输入分类名称" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">单位</label>
            <div class="layui-input-inline">
                <input type="text" name="units" value="<?php echo htmlentities($material['units']); ?>" lay-verify="required" autocomplete="off" placeholder="请输入分类名称" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <div class="layui-input-inline" style="text-align: center;">
                <button class="layui-btn" lay-submit="" lay-filter="add">提交</button>
                <button class="layui-btn layui-btn-normal" type="reset">重置</button>
            </div>
        </div>
    </form>
</div>
</body>
<script type="text/javascript">
    layui.use(['form'], function(){
        var form = layui.form;
        //监听提交
        form.on('submit(add)', function(data){
            // layer.alert(JSON.stringify(data.field), {
            //     title: '最终的提交信息'
            // })
            $.ajax({
                type:'post',
                url:'<?php echo url("edit_material"); ?>',
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