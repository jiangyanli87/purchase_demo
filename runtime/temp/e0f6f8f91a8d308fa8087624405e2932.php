<?php /*a:3:{s:72:"E:\TP5.0\purchase\application\purchase\view\index\cel_qualification.html";i:1623136485;s:62:"E:\TP5.0\purchase\application\purchase\view\public\header.html";i:1622880787;s:62:"E:\TP5.0\purchase\application\purchase\view\public\footer.html";i:1620956778;}*/ ?>

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
<style>
/*修改单选框样式*/
.layui-form-radioed i {
    width: 20px;/*保证添加样式后可点击范围不变  与改前宽度一致*/
    color: rgba(0,0,0,0);
    /* 隐藏原样式 */
}
.layui-form-radioed i:hover {
    width: 20px;/*保证添加样式后可点击范围不变  与改前宽度一致*/
    color: rgba(0,0,0,0);/*隐藏原样式*/
}

/*修改后的样式  可替换其他样式 本例使用了layui的icon代码  也可用background-image等其它样式修改*/
.layui-form-radioed i.layui-anim.layui-icon:before {
    content: '\e605';
    /* font-size: 10px; */
    font-weight: bold;
    background-color: #086DF3;
    border-radius: 16px;
    border: solid 1px #086DF3;
    /* padding: 2px; */
    color: #fff;
}

.layui-form-radio:hover *, .layui-form-radioed, .layui-form-radioed > i>div {
    color: #333;
}
.layui-form .layui-form-label{
    font-size: 14px;
font-family: Microsoft YaHei;
font-weight: 400;
color: #666666;
line-height: 10px;
margin-top: 4px;
}
.textarea{
    width:436px ;
    height: 200px;
    /* padding:10px; */
    /* resize: none; */
}
.x-body{
    padding:30px 0px;
}

.layui-form-item .layui-input-inline{
    width: 140px;
}
</style>
<body>

<div class="x-body" >
    <form class="layui-form">
       
          <div class="layui-form-item">
            <label class="layui-form-label" style="margin-top: -2px;">取消原因</label>
             <div class="layui-input-block">
                <textarea class="textarea" id="numberId" placeholder="请输入原因" maxlength="200" required lay-verify="required"></textarea>
                <span class="layui-form-label" style="position: absolute;right: 55px;bottom:10px; width: 55px;">
                    <span id="numbers">0</span>/200
                </span>
             </div>
           
          </div>
          


        <div class="layui-form-item" style="float: right;margin-right: 23px;margin-top: 24px;">
            <label class="layui-form-label"></label>
            <div class="layui-input-inline" style="text-align: center;">
                <button class="layui-btn layui-btn-normal close" value="关闭" type="reset" style="background-color: #fff;color: #333;border: #666666 solid 1px;">重置</button>
                <button class="layui-btn" lay-submit="" lay-filter="add" >确定</button>
              
            </div>
        </div>
    </form>
</div>
</body>
<script>
 

</script>
<script type="text/javascript">
   $(function(){
    $("body").on('mouseenter','.layui-form-radioed',function(){
        $(".layui-form-radioed i").css("color",'rgba(0,0,0,0)')
    })
    $("body").on('click','.layui-form-radioed',function(){
     
        $(".layui-form-radio i").css("color",'#666');
        $(".layui-form-radioed i").css("color",'rgba(0,0,0,0)');
    })
   
    })
    layui.use(['form','layedit'], function(){
        var form = layui.form;
        var layedit= layui.layedit;
       
        //监听input文本可输入字数
$("#numberId").on("input",function(e){
    //获取input输入的值
    if(e.delegateTarget.value.length<=200){
    	var show = document.getElementById("numbers");
        show.innerHTML = Math.floor(e.delegateTarget.value.length);
    }
    if(e.delegateTarget.value.length>=200){
    	$('#numbers').attr("style","color:red");
    }else{
    	$('#numbers').removeAttr("style","color:red");
    }
});
        //监听提交
        form.on('submit(add)', function(data){
            // layer.alert(JSON.stringify(data.field), {
            //     title: '最终的提交信息'
            // })
            $.ajax({
                type:'post',
                url:'<?php echo url("add_material"); ?>',
                data: data.field,
                dataType:'json',
                success(res){
                    if(res.code == 0){
                        layer.msg(res.msg, {icon:1}, function () {
                            parent.layer.closeAll();
                            parent.layui.table.reload('materList');//刷新父窗口表格
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